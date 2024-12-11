<?php

namespace App\Http\Requests;

class UpdateGuestRequest extends BaseGuestRequest
{
    public function rules()
    {
        $guestId = $this->route('id');

        return array_merge(parent::rules(), [
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'nullable|email|unique:guests,email,' . $guestId,
            'phone' => 'nullable|string|unique:guests,phone,' . $guestId,
            'country' => 'nullable|string|max:255',
        ]);
    }
}
