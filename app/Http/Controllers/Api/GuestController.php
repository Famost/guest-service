<?php

namespace App\Http\Controllers\Api;

use App\Contracts\PhoneServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGuestRequest;
use App\Http\Requests\UpdateGuestRequest;
use App\Models\Guest;

class GuestController extends Controller
{
    protected $phoneService;

    public function __construct(PhoneServiceInterface $phoneService)
    {
        $this->phoneService = $phoneService;
    }

    public function index()
    {
        return Guest::all();
    }

    public function store(StoreGuestRequest $request)
    {
        $country = $this->getCountry($request);

        $guest = Guest::create(array_merge($request->only(['first_name', 'last_name', 'email', 'phone']), ['country' => $country]));

        return response()->json($guest, 201);
    }

    public function show($id)
    {
        return Guest::findOrFail($id);
    }

    public function update(UpdateGuestRequest $request, $id)
    {
        $guest = Guest::findOrFail($id);
        $country = $this->getCountry($request);

        $guest->fill($request->only(['first_name', 'last_name', 'email', 'phone']));
        $guest->country = $country;
        $guest->save();

        return response()->json($guest, 200);
    }

    public function destroy($id)
    {
        $guest = Guest::findOrFail($id);
        $guest->delete();

        return response()->json(null, 204);
    }

    protected function getCountry($request)
    {
        return $request->country ?? $this->phoneService->getCountryFromPhone($request->phone);
    }
}
