<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCorporate extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_code',
        'client_name',
        'contact_person',
        'address',
        'contact_number',
        'email',
    ];
}
