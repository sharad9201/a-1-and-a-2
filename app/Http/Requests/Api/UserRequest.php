<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserRequest extends FormRequest
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
        if ($this->method() == 'POST') {
            return [
                'name' => ['required', 'max:100'],
                'email' => ['required', 'email'],
                'age' => ['required', 'integer'],
                'bio' => ['required', 'string'],
                'image' => ['image', 'mimes:jpeg,jpg,png'],
                'password' => ['required', Password::min(6)->letters()
                    ->numbers()
                    ->symbols()],
            ];
        } elseif ($this->method() == 'PUT' || $this->method() == 'PATCH') {
            return [
                'name' => ['required', 'max:100'],
                'age' => ['required', 'integer'],
                'bio' => ['required', 'string'],
                'image' => ['image', 'mimes:jpeg,jpg,png'],
            ];
        }
    }
}
