<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConducesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conduces', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('placa_id')->unsigned()->nullable();
            $table->integer('instrutor_id')->unsigned()->nullable();

            $table->foreign('placa_id')->references('id')->on('cars');
            $table->foreign('instrutor_id')->references('id')->on('instrutors');
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
        Schema::dropIfExists('conduces');
    }
}
