<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientsCorporate extends Model
{
    use HasFactory;

    public $table = 'clients_corporate';

    protected $fillable = [
        'client_code',
        'client_name',
        'contact_person',
        'address',
        'contact_number',
        'email',
    ];
}
