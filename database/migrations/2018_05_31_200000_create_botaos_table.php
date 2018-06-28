<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBotaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tec_botoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('tipo');
            $table->string('url')->nullable();
            $table->string('situacao')->nullable();
            $table->string('acao')->nullable();
            $table->string('icone')->default('play')->nullable();
            $table->string('cor')->nullable();
            $table->string('descricao')->nullable();
            $table->string('observacao')->nullable();

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
        Schema::dropIfExists('tec_botoes');
    }
}
