<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoluntariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntarios', function (Blueprint $table) {
            $table->id();

            $table->string('Nombre');
            $table->string('Apellidos');
            $table->date('FechaNacimiento');
            $table->integer('IdRefugio');
            $table->string('Foto');
            
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
        Schema::dropIfExists('voluntarios');
    }
}
