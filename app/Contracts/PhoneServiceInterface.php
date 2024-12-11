<?php

namespace App\Contracts;

interface PhoneServiceInterface
{
    public function getCountryFromPhone($phone);
}
