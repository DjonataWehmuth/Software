<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tec_tabelas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao');
            $table->string('observacao')->nullable();

            $table->string('formularioconsulta');
            $table->string('formularioindex');
            $table->string('formularionovo');

            $table->string('inserirregistro');
            $table->string('alterarregistro');
            $table->string('excluirregistro');

            $table->string('atualizarregistro')->nullable();

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
        Schema::dropIfExists('tec_tabelas');
    }
}
