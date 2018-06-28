<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obr_cadastro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');

            $table->decimal('valororcamento')->nullable();
            $table->decimal('valordisponivel')->nullable();
            $table->decimal('valorutilizado')->nullable();

            $table->decimal('valorrecebido')->nullable();
            $table->decimal('valorpendente')->nullable();

            $table->decimal('duracaoatual')->nullable();
            $table->decimal('previsaoduracao')->nullable();
            $table->decimal('duracaoexcedente')->nullable();

            $table->datetime('previsaoinicio')->nullable();
            $table->datetime('previsaotermino')->nullable();

            $table->longtext('observacao')->nullable();

            $table->timestamps();

            $table->integer('pessoa_id')->unsigned();
            $table->foreign('pessoa_id')->references('id')->on('cad_pessoas');

            $table->integer('status_id')->unsigned()->default(1);
            $table->foreign('status_id')->references('id')->on('cad_status');

            $table->integer('prioridade_id')->unsigned()->default(1);
            $table->foreign('prioridade_id')->references('id')->on('cad_prioridade');

            $table->integer('tipo_id')->unsigned()->default(1);
            $table->foreign('tipo_id')->references('id')->on('cad_tipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obr_cadastro');
    }
}
