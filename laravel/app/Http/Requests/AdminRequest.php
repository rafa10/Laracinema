<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class AdminRequest extends Request
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
            'lastname' => 'required|max:255',
            'firstname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:administrators,email,'.Auth::user()->id,// test if the administrator is unique
            'description' => 'required|min:15',
        ];
    }

    public function messages()
    {
        return [
            'lastname.required' => 'votre nom est requis',
            'lastname.max' => 'votre prennom est trop long',
            'firstname.required' => 'votre prénom est requis',
            'firstname.max' => 'votre prénom est trop long',
            'description.required' => 'votre description est requis',
            'description.min' => 'votre description est court',
            'email.required' => 'votre email est requis',
            'email.unique' => 'votre email est déja existe',
        ];
    }
}
