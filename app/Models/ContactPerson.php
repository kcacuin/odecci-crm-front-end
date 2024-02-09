<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPerson extends Model
{
    use HasFactory;

    public $table = 'contact_person';

    public function clients_corporation()
    {
        return $this->hasMany(ClientsCorporate::class, 'contact_people_id');
    }
}
