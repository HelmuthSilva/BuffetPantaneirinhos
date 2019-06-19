<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contratante');
            $table->string('cpf');
            $table->unsignedInteger('orcamento');
            $table->unsignedInteger('fornecedor');
            $table->unsignedInteger('pacote');
            $table->float('valor');
            $table->foreign('orcamento')->references('id')->on('orcamentos');
            $table->foreign('fornecedor')->references('id')->on('fornecedores');
            $table->foreign('pacote')->references('id')->on('pacotes');
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
        Schema::dropIfExists('contratos');
    }
}
