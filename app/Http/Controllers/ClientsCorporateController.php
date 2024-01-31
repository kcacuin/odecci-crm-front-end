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
        return view('clients.corporate.create');
    }

    public function store()
    {
        ClientsCorporate::create(array_merge($this->validateClient(), [
            'client_code' => request()->user()->id,
        ]));

        return redirect('/clients/corporate');
    }

    protected function validateClient(?ClientsCorporate $client = null): array
    {
        $client ??= new ClientsCorporate();

        return request()->validate([
            'client_code' => 'required',
            'client_name' => 'required',
            'contact_person' => 'required',
            'address' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
        ]);
    }
}
