<?php

namespace App\Http\Requests\MyAuth\Sessions;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Store extends FormRequest
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
            'email' => 'required|string|email',
            'password' => 'required|string',
        ];
    }

    public function tryMyAuthUser()
    {
        if(!Auth::attempt($this->only(['email', 'password']), $this->boolean('remember')))
        {
            throw ValidationException::withMessages([
                'email' => trans('my-auth.failed'),
            ]);
        }
    }
}
