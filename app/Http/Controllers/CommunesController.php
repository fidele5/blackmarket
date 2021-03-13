<?php

namespace App\Http\Controllers;

use App\Communes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommunesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Communes $communes)
    {
        $villes = DB::table('villes')->get();
        $communes = $communes->all();
        return view('admin.communes')->with(compact('communes', 'villes'));
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
        Communes::create($request->except('_token'));
        return "saved";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Communes  $communes
     * @return \Illuminate\Http\Response
     */
    public function show(Communes $communes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Communes  $communes
     * @return \Illuminate\Http\Response
     */
    public function edit(Communes $communes)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Communes  $communes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Communes $commune)
    {
        $commune->update([
            'nom'=>$request->champs[2],
            'etat'=>$request->champs[3],
            'villes_id'=>$request->champs[4],
        ]);
        return "ok";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Communes  $communes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Communes $commune)
    {
        $commune->delete();
        return "deleted";
    }
}
