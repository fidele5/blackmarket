<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;
use App\User;
use App\Articles;
use App\Mail\ContactSeller;
use App\Notifications\InvoicePaid;
use App\Notifications\TelegramNotifyer;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function show(Messages $messages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function edit(Messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Messages $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Messages $messages)
    {
        //
    }

    /**
     * Sending Messages to seller
     */

    public function whatsap(Request $request)
    {
        $message = $request->except('_token');
        $user = User::find(1);
        $user->notify(new InvoicePaid($message));
        return "ok";
    }

    public function telegram(Request $request)
    {
        $user = User::find(1);
        $notification = $request->except('_token');
        $user->notify(new TelegramNotifyer($notification));
        return "ok";
    }

    public function email(Request $request)
    {
        $fields = $request->except(['_token']);
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
                'articles.type_id AS type',
                'users.username AS vendeur',
                'users.email AS email',
            ))
            ->where('articles.id', $request->produit)->first();
        Mail::to($product->email)
            ->send(new ContactSeller($fields, $product));
        return "ok";

    }
}
