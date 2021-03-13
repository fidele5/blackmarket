<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => "required|max:45|min:4",
            'prenom' => 'required|max:45|min:4',
            'username' => 'required|max:45|min:4',
            'telephone1' => 'required|max:20|min:10',
            'telephone2' => 'nullable|max:20|min:10',
            'password' => 'required|confirmed|required_with:password_confirmation|min:8|max:50',
            'email' => 'nullable|email',
        ];
    }

    public function messages(){
        return [
            'required' => 'Le :attribute est requis',
            'password.confirmed' => 'Les deux mots de passe ne sont pas conformes',
            'email.unique' => 'L adresse email est deja utilisé',
            'between' => 'La valeur de :attribute doit avoir au min :min - :max',
        ];
    }
}
