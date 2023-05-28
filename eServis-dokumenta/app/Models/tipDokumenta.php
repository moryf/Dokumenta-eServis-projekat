<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class tipDokumenta extends Model
{
    use HasFactory;

    public function termini():HasMany{
        return $this->hasMany(Termin::class);
    }
}
