<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('usuario');
            $table->string('nomeServico');
            $table->date('nascimento');
            $table->string('rua');
            $table->string('bairro');
            $table->string('numero');
            $table->string('telefone');
            $table->float('media');
            $table->integer('notas');
            $table->integer('solicitada');
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
        Schema::dropIfExists('fornecedor');
    }
}
