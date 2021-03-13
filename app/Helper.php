<?php
namespace App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Helper extends Controller
{
    public static function getMyArticles($id)
    {
        $datas = DB::table('articles')->join('users', 'articles.user_id', '=', 'users.id')
                ->select(array(
                'articles.nom AS article',
                'articles.prix AS prix',
                'articles.photo AS photo',
                'articles.description AS description',
                'articles.id AS idart'))
                ->where("users.id", $id)->get();
        return $datas;

    }

    public static function countProducts($id){
        $datas = DB::table('articles')->join('users', 'articles.user_id', '=', 'users.id')
            ->where("users.id", $id)->count();
        return $datas;
    }

    public static function sumPricesproducts($id)
    {
        $datas = DB::table('articles')->join('users', 'articles.user_id', '=', 'users.id')
            ->where("users.id", $id)->sum('prix');
        return $datas;

    }

    public static function countMessages($id)
    {
        $messages = DB::table('messages')->where('id', $id)->count();
        return $messages;
    }

    public static function soldProducts($id)
    {
        $sold = DB::table('articles')->where('is_active', false)->count();
        return $sold;
    }

    public static function getCategories()
    {
        $categories = DB::table('types')->get();
        return $categories;
    }

    public static function countCategories($id){
        $categories = DB::table('articles')->where('types_id', $id)->count();
        return $categories;
    }
}
    