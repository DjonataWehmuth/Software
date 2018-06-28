<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cad_tipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->longtext('observacao')->nullable();
            $table->timestamps();

            $table->integer('tabela_id')->unsigned();
            $table->foreign('tabela_id')->references('id')->on('tec_tabelas');

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
        Schema::dropIfExists('cad_tipos');
    }
}
