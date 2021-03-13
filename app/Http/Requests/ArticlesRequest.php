<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticlesRequest extends FormRequest
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
            'prix' => 'required|max:11|min:1',
            'commune_id' => 'required|max:11|min:1',
            'description' => 'required|max:255|min:10',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type_id'=>'required|max:11|min:1'
            
        ];
    }


    public function messages(){
        return[
            'required'=>'Le champs :attribute est requis',
            'between' => 'La valeur de :attribute doit avoir au min :min - :max',
            'image'=>' :attribute doit etre de type :mimes',
        ];
    }

    public function attributes()
    {
        return [
            'photo' => "l'image",
        ];
    }
}
