<?php

use App\Models\Korisnik;
use App\Models\Mup;
use App\Models\Status;
use App\Models\tipDokumenta;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerminiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('termini', function (Blueprint $table) {
            $table->id('terminId');
            $table->foreignIdFor(Korisnik::class);
            $table->foreignIdFor(Mup::class);
            $table->date('datum');
            $table->foreignIdFor(Status::class);
            $table->foreignIdFor(tipDokumenta::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('termini');
    }
}
