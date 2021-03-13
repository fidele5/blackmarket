<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Http\Requests\ArticlesRequest;
use App\Repositories\ArticlesRepositorie;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $articleRepository;

    public function __construct(ArticlesRepositorie $articlesRepositorie) {
        $this->articleRepository = $articlesRepositorie;
    }

    public function index()
    {
        $articles = $this->articleRepository->getPaginate(12);
    
        if (count($articles) > 0) {
            return view('products')->with('articles', $articles);
        }else {
            return view('products')->withMessage('Aucun produit enregistré pour le moment');
        }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticlesRequest $articlesRequest)
    {
       $imageName = time() . '.' . request()->photo->getClientOriginalExtension();
        request()->photo->move(public_path('img/shop/products/'), $imageName);

        $thumbnailpath = public_path('img/shop/products/' . $imageName);
        $img = Image::make($thumbnailpath)->resize(450, 290, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($thumbnailpath);

        Articles::create(
            [
                "nom" => $articlesRequest->nom,
                "etat" => "disponible",
                "photo" => $imageName,
                "prix" => $articlesRequest->prix,
                "duree" => 15,
                "types_id" => $articlesRequest->type_id,
                "user_id" => Auth::user()->id,
                "priorite_id" => 5,
                "description" => $articlesRequest->description,
                "is_active" => true,
                "commune_id" => $articlesRequest->commune_id,
            ]);

        return 'ok';

    }

    /**
     * Checkout a single product
     */

    public function checkout($id)
    {
        $product = Articles::join('users', 'articles.user_id', '=', 'users.id')
            ->join('communes', 'articles.commune_id', '=', 'communes.id')
            ->join('villes', 'communes.villes_id', '=', 'villes.id')
            ->select(array(
                'articles.nom AS article',
                'articles.prix AS prix',
                'articles.photo AS photo',
                'articles.description AS description',
                'articles.id AS idart',
                'articles.created_at',
                'articles.types_id AS type',
                'users.username AS vendeur',
                'users.email AS email',
                'users.telephone1 AS phone1',
                'users.telephone2 AS phone2',
                'villes.nom AS ville',
                'villes.province AS province',
                'communes.nom AS commune'
            ))
            ->where('articles.id', $id)->first();
        return view('checkout')->withProduct($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show(Articles $article)
    {
        $related = Articles::Where("types_id", $article->types_id)
            ->take(8)
            ->get();
        if (session()->has('viewed')) {
            foreach (session("viewed") as $value) {
                if ($value->id != $article->id) {
                    Session::push("viewed", $article);
                } else {
                    continue;
                }

            }
        } else {
            Session::push("viewed", $article);
        }

        //session()->forget('viewed');

        return view('single')->with(['article'=>$article, 'related'=>$related]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit(Articles $articles)
    {
        return view('admin.editProduit')->with('produit', $articles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articles $articles)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $articles)
    {
        $articles->delete();
    }
}
