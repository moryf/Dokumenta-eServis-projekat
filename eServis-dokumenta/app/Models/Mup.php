<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mup extends Model
{

    use HasFactory;

    protected $fillable = [
        'naziv',
        'adresaMupa',
        'brojTelefona',
        'email'
    ];
}
