<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion')->nullable();
            $table->integer('horario_id')->unsigned()->nullable();
            $table->integer('class_id')->unsigned()->nullable();
            $table->integer('instrutor_id')->unsigned()->nullable();

            $table->foreign('horario_id')->references('id')->on('horarios');
            $table->foreign('class_id')->references('id')->on('classes');
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
        Schema::dropIfExists('groups');
    }
}
