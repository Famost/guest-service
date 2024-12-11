<?php

namespace App\Services;

use App\Contracts\PhoneServiceInterface;
use Propaganistas\LaravelPhone\PhoneNumber;

class PhoneService implements PhoneServiceInterface
{
    public function getCountryFromPhone($phone)
    {

        $phoneNumber = new PhoneNumber($phone);

        if ($phoneNumber->isValid()) {
            $countryCode = $phoneNumber->getCountry();
            return config("countries.$countryCode", null);
        }

        return null;
    }
}
