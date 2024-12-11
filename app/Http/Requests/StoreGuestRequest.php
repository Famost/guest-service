<?php

namespace App\Http\Requests;

class StoreGuestRequest extends BaseGuestRequest
{
    public function rules()
    {
        return array_merge(parent::rules(), [
            'email' => 'required|email|unique:guests,email',
            'phone' => 'required|string|unique:guests,phone',
        ]);
    }
}
