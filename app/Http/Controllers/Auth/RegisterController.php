<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data,
                [
                    'nom' => "required|max:45|min:4",
                    'prenom' => 'required|max:45|min:4',
                    'username' => 'required|max:45|min:4',
                    'telephone1' => 'required|max:20|min:10',
                    'telephone2' => 'nullable|max:20|min:10',
                    'password' => 'required|confirmed|required_with:password_confirmation|min:8|max:50',
                    'email' => 'nullable|email|unique:users,email',
                ],
                [
                    'required' => 'Le :attribute est requis',
                    'password.confirmed' => 'Les deux mots de passe ne sont pas conformes',
                    'email.unique' => 'L adresse email est deja utilisé',
                    'between' => 'La valeur de :attribute doit avoir au min :min - :max',
                ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nom'=>$data['nom'],
            'prenom'=>$data['prenom'],
            'username'=>$data['username'],
            'telephone1'=>$data['telephone1'],
            'telephone2'=>$data['telephone2'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'photo'=> 'user.png',
            'etat'=>true,
            'type'=>"vendeur"
        ]);
    }
}
