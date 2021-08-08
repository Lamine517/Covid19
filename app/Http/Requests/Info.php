<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Info extends FormRequest
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
            'vaccin' => ['required', 'string', 'max:100'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'description' => ['required', 'string', 'max:500'],
            'centre' => ['required', 'string', 'max:100'],
            'jours' => ['required', 'string', 'max:500'],
            'heures' => ['required', 'string', 'max:500'],
        ];
    }
}
