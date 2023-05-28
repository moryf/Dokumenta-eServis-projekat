<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoviDokumenataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipovi_dokumenata', function (Blueprint $table) {
            $table->id('tipDokumentaId');
            $table->string('nazivDokumenta')->unique();
            $table->integer('vremeZavrsetka');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipovi_dokumenata');
    }
}
