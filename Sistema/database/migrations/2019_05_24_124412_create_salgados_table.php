<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalgadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salgados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo1');
            $table->string('tipo2');
            $table->string('tipo3');
            $table->string('tipo4');
            $table->string('tipo5');
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
        Schema::dropIfExists('salgados');
    }
}
