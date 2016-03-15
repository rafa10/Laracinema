<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class MoviesRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type' => 'required|min:10',
            'title' => 'required|min:10',
            'description' => 'required|min:10',
            'languages' => 'required',
            'image' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'type.required' => 'Le type est obligatoire',
            'title.required' => 'Le titre est obligatoire',
            'description.required' => 'La description est obligatoire',
            'languages.required' => 'Le languages est obligatoire',
            'image.required' => 'L\'images est obligatoire',
            'type.min' => 'Le type doit avoire au mois 10 caracteres',
            'title.min' => 'Le titre doit avoire au mois 10 caracteres',
            'description.min' => 'La description doit avoire au mois 10 caracteres'
        ];
    }
}
