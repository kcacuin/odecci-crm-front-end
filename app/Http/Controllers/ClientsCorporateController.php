<?php

namespace App\Http\Controllers;

use App\Models\ClientsCorporate;

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
        return view('clients.corporate.create');
    }

    public function store()
    {
        ClientsCorporate::create(array_merge($this->validateClient(), [
            'id' => request()->user()->id,
            // 'client_image' => request()->file('client_image')->store('client_images')
        ]));

        return redirect('/clients/corporate');
    }

    protected function validateClient(?ClientsCorporate $client = null): array
    {
        $client ??= new ClientsCorporate();

        return request()->validate([
            'client_code' => 'required',
            'client_name' => 'required',
            // 'client_image' => $client->exists ? ['image'] : ['required', 'image'],
            'contact_person' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
        ]);
    }
}
