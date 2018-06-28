<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObraFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obr_cadastrofuncionario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            
            $table->decimal('valorhora')->nullable();
            $table->decimal('previsaohoras')->nullable();
            
            $table->timestamps();

            $table->integer('pessoa_id')->unsigned();
            $table->foreign('pessoa_id')->references('id')->on('cad_pessoas');

            $table->integer('funcao_id')->unsigned();
            $table->foreign('funcao_id')->references('id')->on('cad_funcao');

            $table->integer('obra_id')->unsigned();
            $table->foreign('obra_id')->references('id')->on('obr_cadastro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obr_cadastrofuncionario');
    }
}
