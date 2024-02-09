<?php

namespace App\Http\Controllers;

use App\Models\ClientsCorporate;
use Illuminate\Http\Request;

class ClientsCorporateController extends Controller
{
    public function index()
    {
        return view('clients.index', [
            'clients' => ClientsCorporate::latest()->paginate(5)
        ]);
    }

    public function create()
    {
        $lastClientCode = ClientsCorporate::max('code');
        $nextClientCode = sprintf('%03d', ($lastClientCode + 1));

        return view('clients.corporate.create', [
            'clients' => ClientsCorporate::latest()->paginate(5),
            'nextClientCode' => $nextClientCode,
        ]);
    }

    public function store()
    {
        ClientsCorporate::create(array_merge($this->validateClient(), [
            'image' => request()->file('image')->store('images'),
        ]));

        return redirect('/clients/corporate');
    }

    protected function validateClient(?ClientsCorporate $client = null): array
    {
        $client ??= new ClientsCorporate();

        return request()->validate([
            'code' => 'required',
            'name' => 'required',
            'image' => $client->exists ? ['image'] : ['required', 'image'],
            'color_legend' => 'required',

            // * Address
            'house_number' => 'required',
            'barangay_district' => 'required',
            'city_municipality' => 'required',
            'province_region' => 'required',
            'country' => 'required',

            'industry' => 'required',
            'email' => 'required',
            'contact_number' => 'required',
        ]);
    }
}
