<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefugiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refugios', function (Blueprint $table) {
            $table->id();

            $table->string('Direccion');
            $table->integer('CantidadPerros');
            $table->unsignedBigInteger('user_id');
            //$table->unsignedBigInteger('perro_id');
            //$table->foreign('perro_id')->references('id')->on('perros');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('refugios');
    }
}
