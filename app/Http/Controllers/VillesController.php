<?php

namespace App\Http\Controllers;

use App\Villes;
use Illuminate\Http\Request;

class VillesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Villes $villes)
    {
        return view('admin.villes')->with('villes', $villes->all());
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
        Villes::create($request->except('_token'));
        return 'saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function show(Villes $villes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function edit(Villes $villes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Villes $ville)
    {
        $ville->update([
            'nom'=>$request->champs[1],
            'province'=>$request->champs[2],
            'etat'=>$request->champs[3],
        ]);
        return "ok";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Villes $ville)
    {
        $ville->delete();
        return "deleted";
    }
}
