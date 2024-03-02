<?php

namespace App\Http\Requests\Comments;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'text' => 'required|string|min:1|max:200',
            'name' => 'required|string|min:1|max:30',
            'model' => 'required',
            'id' => 'required|integer',
        ];
    }

    public function checkCommentable()
    {
        $commentables = config('commentable');

        if(!isset($commentables[$this->model]))
        {
            Log::alert('something is wrong '. $this->ip() . ' ' . $this->model);

            throw ValidationException::withMessages([
                'model' =>  'wrong model',
            ]);
        }

        $model = $commentables[$this->model]::findOrFail($this->id);
        return $model;
    }
}
