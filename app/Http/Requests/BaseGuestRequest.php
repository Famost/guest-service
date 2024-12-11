<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseGuestRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'country' => 'nullable|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Имя обязательно для заполнения.',
            'last_name.required' => 'Фамилия обязательна для заполнения.',
            'email.required' => 'Email обязателен для заполнения.',
            'phone.required' => 'Телефон обязателен для заполнения.',
            'country.string' => 'Страна должна быть строкой.',
            'country.max' => 'Страна не может превышать 255 символов.',
        ];
    }
}
