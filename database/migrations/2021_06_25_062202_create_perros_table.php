<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perros', function (Blueprint $table) {
            $table->id();

            $table->string('Nombre');
            $table->date('FechaIngreso');
            $table->string('Raza');
            $table->smallInteger('Edad');
            //$table->unsignedBigInteger('refugio_id');
            $table->string('Foto');
            
            $table->timestamps();
            //$table->foreign('refugio_id')->references('id')->on('refugios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perros');
    }
}
