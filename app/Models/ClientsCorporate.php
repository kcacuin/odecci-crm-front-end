<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientsCorporate extends Model
{
    use HasFactory;

    public $table = 'clients_corporate';

    protected $guarded = [];

    // protected $fillable = [
    //     'client_code',
    //     'client_name',
    //     'client_image',
    //     'client_email',
    //     'client_contact_number',
    // ];
}
