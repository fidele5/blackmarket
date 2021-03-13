<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Http\Requests\UsersUpdateRequest;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Users $users)
    {
        return view("admin.users")->with('users', $users->all());
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
     * Upload file
     */

    public function upload(Request $request)
    {

        $imageName = time() . '.' . request()->avatar->getClientOriginalExtension();
        request()->avatar->move(public_path('img/account/'), $imageName);

        $thumbnailpath = public_path('img/account/' . $imageName);
        $img = Image::make($thumbnailpath)->resize(250, 250, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($thumbnailpath);

        Users::find(Auth::user()->id)->update(['photo'=>$imageName]);
        return "ok";

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        Users::create($request->except('_token', 'password_confirmation'));
        return "saved";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        return view('profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(UsersUpdateRequest $request, Users $user)
    {
        $user->update([
            "nom"=> $request->nom,
            "prenom"=> $request->prenom,
            "username"=>$request->username,
            "telephone1"=>$request->telephone1,
            "telephone2"=>$request->telephone2,
            "password"=> Hash::make($request->password)
        ]);

        echo "ok";
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $user)
    {
        $user->delete();
        return "deleted";
    }
}
