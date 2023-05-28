<?php

use App\Models\Mup;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKorisniciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('korisnici', function (Blueprint $table) {
            $table->id('korisnikId');
            $table->string('ime');
            $table->string('prezime');
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('mupId')->constrained(table: 'mupovi', column: 'mupId');
            $table->string('adresa');
            $table->boolean('admin');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('korisnici');
    }
}
