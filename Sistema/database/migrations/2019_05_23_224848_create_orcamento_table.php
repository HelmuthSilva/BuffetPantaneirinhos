<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrcamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('usuario');
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->date('data');
            $table->string('convidados');
            $table->string('decoracao');
            $table->string('crianca');
            $table->string('observacao');
            $table->string('status');
            $table->string('criado');
            $table->foreign('usuario')->references('id')->on('users');
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
        Schema::dropIfExists('orcamento');
    }
}
