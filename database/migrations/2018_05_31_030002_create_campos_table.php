<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCamposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tec_campos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('titulo')->nullable();
            $table->string('descricao')->nullable();
            $table->string('somenteleitura')->nullable();

            $table->string('tamanho')->nullable();
            $table->string('tamanhof')->nullable();
            $table->string('tamanhoi')->nullable();

            $table->integer('ordem');
            $table->string('componente');
            $table->string('tipo')->nullable();
            $table->string('mascara')->nullable();
            $table->string('icone')->default('angle-right');

            $table->string('tabelareferencia')->nullable();
            $table->string('observacao')->nullable();
            $table->string('obrigatorio')->nullable();

            $table->string('ehformulario');
            $table->string('ehgrid');

            $table->integer('tabela_id')->unsigned();
            $table->timestamps();

            $table->foreign('tabela_id')->references('id')->on('tec_tabelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tec_campos');
    }
}
