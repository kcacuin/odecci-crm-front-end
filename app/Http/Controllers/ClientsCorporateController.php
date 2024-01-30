<?php

namespace App\Http\Controllers;

use App\Models\ClientsCorporate;
use Illuminate\Http\Request;

class ClientsCorporateController extends Controller
{
    public function index()
    {
        return view('clients', [
            'clients' => ClientsCorporate::latest()
                ->paginate(5)
        ]);
    }
}
