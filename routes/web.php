<?php

use App\Articles;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\Articles as ResourcesArticles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', ["as" => 'home', 'uses' => 'HomeController@index']);
Route::get('/admin/calendar', ["as" => 'calendar', 'uses' => 'HomeController@calendar']);
Route::get('/admin/contacts', ["as" => 'contacts', 'uses' => 'HomeController@contact']);

Route::any('/search', function (Request $request) {
    $q = $request->input('site_search');
    $articles = Articles::where('nom', 'LIKE', '%' . $q . '%')->orWhere('description', 'LIKE', '%' . $q . '%')->paginate(6);
    if (count($articles) > 0) {
        return view('search')->withArticles($articles)->withQuery($q);
    } else {
        return view('search')->withMessage('Aucun résultat trouvé pour " ' . $q . ' "');
    }

});

/**
 * Login et authentification
 */

Auth::routes();
Route::get('/connexion', ['as' => 'auth', 'uses' => 'HomeController@login']);
Route::get('/checkout/{id}', ['as' => 'checkout', 'uses' => 'ArticlesController@checkout']);

/**
 * Articles
 */

Route::resource('articles', "ArticlesController");

/**
 * Admins
 */

Route::resource('admins', 'AdminsController');
Route::get('/admin', function () {
    return view('admin.home');
})->middleware("auth");

/**
 * Users
 */

Route::resource('users', 'UsersController');
Route::post('/upload', ["as" => "upload", "uses" => "UsersController@upload"]);

/**
 * Communes
 */

Route::resource('communes', 'CommunesController');

/**
 * Villes
 */

Route::resource('villes', 'VillesController');

/**
 * Types
 */

Route::resource('types', 'TypesController');
Route::get('admin/categories', ["as" => "categories", "uses" => "TypesController@categories"]);
/**
 * Messages
 */

Route::resource('messages', 'MessagesController');

Route::get('account/{option}', function ($option) {
    if ($option == "add") {
        $communes = DB::table('communes')->get();
        return view('user.container')->with(['option' => $option, 'communes' => $communes]);
    }
    return view('user.container')->with('option', $option);
})->name('account');

Route::get('/command/complete', function () {
    return view('complete');
});

/**
 * Messages
 */

Route::post('/messages/whatsap', ['as' => 'whatsap', 'uses' => 'MessagesController@whatsap']);
Route::post('/messages/telegram', ['as' => 'telegram', 'uses' => 'MessagesController@telegram']);
Route::post('/messages/email', ['as' => 'email', 'uses' => 'MessagesController@email']);

Route::get('/produits', function () {
    return new ArticleResource(Articles::paginate());
    
});

/**
 * login withn Socialite
 */
Route::get('login/facebook', 'Auth\LoginController@facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@callback');

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('facebook',  function () {
    return view('fb');
})->name('facebook');


