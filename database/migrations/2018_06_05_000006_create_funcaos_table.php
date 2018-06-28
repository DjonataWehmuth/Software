<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cad_funcao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->longtext('observacao')->nullable();

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
        Schema::dropIfExists('cad_funcao');
    }
}
