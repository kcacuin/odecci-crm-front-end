<?php

namespace App\Http\Controllers;

use App\Models\ClientCorporate;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = ClientCorporate::all();

        return view('clients', ['clients' => $clients]);
    }
}
