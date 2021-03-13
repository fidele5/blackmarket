<?php

namespace App\Http\Controllers;

use App\Types;
use function PHPSTORM_META\type;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Types $types)
    {
        return view('category');
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
    public function store(Request $request)
    {
        Types::create($request->except('_token'));
        return "saved";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Types  $types
     * @return \Illuminate\Http\Response
     */
    public function show(Types $type)
    {
        $articles = $type->articles;
        if (count($articles) > 0) {
            return view('categories')->withArticles($articles)->withType($type->libelle);
        } else {
            return view('categories')->withMessage("Aucun produit de cette categorie trouvé")->withType($type->libelle);
        }
    }

    public function categories(Types $types)
    {
        return view('admin.categories')->with('categories', $types->all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Types  $types
     * @return \Illuminate\Http\Response
     */
    public function edit(Types $types)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Types  $types
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Types $type)
    {
        $type->update(
            [
                "libelle" => $request->champs[1],
                "pourcentage" => $request->champs[2],
                "priorite" => $request->champs[3],
            ]
        );
        return "ok";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Types  $types
     * @return \Illuminate\Http\Response
     */
    public function destroy(Types $type)
    {
        $type->delete();
        return "deleted";
    }
}
