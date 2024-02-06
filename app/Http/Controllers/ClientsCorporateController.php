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
        $lastClientCode = ClientsCorporate::max('client_code');
        $nextClientCode = sprintf('%03d', ($lastClientCode + 1));

        return view('clients.corporate.create', [
            'nextClientCode' => $nextClientCode,
        ]);
    }

    public function store()
    {
        ClientsCorporate::create(array_merge($this->validateClient(), [
            'client_image' => request()->file('client_image')->store('client_images'),
            // 'clie' => request()->file('client_image')->store('client_images')
        ]));

        return redirect('/clients/corporate');
    }

    // public function update(Request $request)
    // {
    //     // auth()->user()->update(['color' => $request->color]);

    //     // return redirect()->back()->with('success', 'Color updated successfully.');
    // }

    protected function validateClient(?ClientsCorporate $client = null): array
    {
        $client ??= new ClientsCorporate();

        return request()->validate([
            'client_code' => 'required',
            'client_name' => 'required',
            'client_image' => $client->exists ? ['image'] : ['required', 'image'],
            'client_color_legend' => 'required',

            // * Address
            'house_number' => 'required',
            'barangay_district' => 'required',
            'city_municipality' => 'required',
            'province_region' => 'required',
            'country' => 'required',

            'industry' => 'required',
            'client_email' => 'required',
            'client_contact_number' => 'required',
        ]);
    }
}
