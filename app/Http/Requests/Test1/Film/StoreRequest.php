<?php

namespace App\Http\Requests\Test1\Film;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string|unique:films|min:3|max:70',
            'genre_id' => 'required|array',
            'genre_id.*' => 'integer|exists:genres,id',
            'url' => 'file|mimes:jpg|dimensions:min_width=135,min_height=135,max_width=500,max_height=500,ratio=1',
        ];
    }
}
