<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mup extends Model
{

    use HasFactory;

    protected $fillable = [
        'naziv',
        'adresaMupa',
        'brojTelefona',
        'email'
    ];

    public function termini():HasMany{
        return $this->hasMany(Termin::class);
    }

    public function korisnici():HasMany{
        return $this->hasMany(Korisnik::class);
    }
}
