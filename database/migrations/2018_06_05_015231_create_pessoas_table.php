<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cad_pessoas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome');
            $table->string('documento')->nullable();
            $table->string('inscricao')->nullable();

            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('email')->nullable();

            $table->integer('sexo_id')->unsigned()->nullable();
            $table->integer('abrangencia_id')->unsigned()->nullable();

            $table->date('nascimento')->nullable();

            $table->longText('observacao')->nullable();

            $table->integer('status_id')->unsigned()->default(1);
            $table->timestamps();

            $table->foreign('sexo_id')->references('id')->on('cad_sexo');
            $table->foreign('abrangencia_id')->references('id')->on('cad_abrangencia');
            $table->foreign('status_id')->references('id')->on('cad_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cad_pessoas');
    }
}
