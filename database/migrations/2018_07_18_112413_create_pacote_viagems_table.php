<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacoteViagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacote_viagems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designacao');
            $table->mediumText('descricao');
            $table->dateTime('data_inicio');
            $table->dateTime('data_fim');
            $table->integer('estado');
            $table->integer('operadors_id')->unsigned();
            $table->foreign('operadors_id')->references('id')->on('operadors');
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
        Schema::dropIfExists('pacote_viagems');
    }
}
