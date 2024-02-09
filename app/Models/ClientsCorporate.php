<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientsCorporate extends Model
{
    use HasFactory;

    public $table = 'clients_corporate';

    protected $guarded = [];

    public function contact_person()
    {
        return $this->belongsTo(ContactPerson::class);
    }
}
