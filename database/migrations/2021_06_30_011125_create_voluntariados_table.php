<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoluntariadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntariados', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('refugio_id');
            $table->unsignedBigInteger('voluntario_id');

            $table->timestamps();

            $table->foreign('refugio_id')->references('id')->on('refugios');
            $table->foreign('voluntario_id')->references('id')->on('voluntarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voluntariados');
    }
}
