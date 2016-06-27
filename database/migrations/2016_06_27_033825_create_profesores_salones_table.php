<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesoresSalonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores_salones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('profesor_id');
            $table->string('salon_id');
            $table->timestamps();

            $table->foreign('profesor_id')->references('id')->on('profesores');
            $table->foreign('salon_id')->references('id')->on('salones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profesores_salones');
    }
}
