<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefugioVoluntarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refugio_voluntario', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('refugio_id');
            $table->unsignedBigInteger('voluntario_id');

            $table->foreign('refugio_id')->references('id')->on('refugios');
            $table->foreign('voluntario_id')->references('id')->on('voluntarios')->onDelete('cascade');

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
        Schema::dropIfExists('refugio_voluntario');
    }
}
