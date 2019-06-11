<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('imagem');
            $table->integer('salgados')->unsigned();
            $table->integer('bebidas')->unsigned();
            $table->string('duracao');
            $table->float('valor');
            $table->foreign('salgados')->references('id')->on('salgados');
            $table->foreign('bebidas')->references('id')->on('bebidas');
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
        Schema::dropIfExists('pacote');
    }
}
