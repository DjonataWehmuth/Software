<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePainelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bi_painel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cor');
            $table->string('url');
            $table->string('icone');
            $table->string('tabela');
            $table->timestamps();

            $table->integer('status_id')->unsigned()->default(1);
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
        Schema::dropIfExists('bi_painel');
    }
}
