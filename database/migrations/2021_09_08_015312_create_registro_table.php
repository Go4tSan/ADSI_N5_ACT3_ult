<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro', function (Blueprint $table) {
            $table->id();
            $table->string('name',125);
            $table->string('lastname',125);
            $table->string('n_documento',25);
            $table->string('N_ficha',25);
            $table->date('date_reg');
            $table->string('email',45);
            $table->string('roles',25);
            $table->string('jornadas',25);
            $table->string('generos',25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro');
    }
}
