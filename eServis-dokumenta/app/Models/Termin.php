<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Termin extends Model
{
    use HasFactory;

    public function mup():BelongsTo{
        return $this->belongsTo(Mup::class);
    }

    public function korisnik():BelongsTo{
        return $this->belongsTo(Korisnik::class);
    }

    public function status():BelongsTo{
        return $this->belongsTo(Status::class);
    }

    public function tipDokumenta():BelongsTo{
        return $this->belongsTo(tipDokumenta::class);
    }
}
