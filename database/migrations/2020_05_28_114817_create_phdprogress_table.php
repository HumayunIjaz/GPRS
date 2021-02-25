<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhdprogressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_h_d_progresses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('phdpro1')->nullable()->changeable();
            $table->string('phdpro2')->nullable()->changeable();
            $table->string('phdpro3')->nullable()->changeable();
            $table->string('phdpro4')->nullable()->changeable();
            $table->string('phdpro5')->nullable()->changeable();
            $table->string('phdpro6')->nullable()->changeable();
            $table->string('phdpro7')->nullable()->changeable();
            $table->string('phdpro8')->nullable()->changeable();
            $table->string('phdpro9')->nullable()->changeable();
            $table->string('phdpro10')->nullable()->changeable();
            $table->string('phdpro11')->nullable()->changeable();
            $table->string('phdpro12')->nullable()->changeable();
            $table->string('phdsms1');
            $table->string('phdsms2')->nullable()->changeable();
            $table->string('phdsms3')->nullable()->changeable();
            $table->string('phdsms4')->nullable()->changeable();
            $table->string('phdsms5')->nullable()->changeable();
            $table->string('phdsms6')->nullable()->changeable();
            $table->string('phdsms7')->nullable()->changeable();
            $table->string('phdsms8')->nullable()->changeable();
            $table->string('phdsms9')->nullable()->changeable();
            $table->string('phdsms10')->nullable()->changeable();
            $table->string('phdtne1')->nullable()->changeable();
            $table->string('phdtne2')->nullable()->changeable();
            $table->string('phdtne3')->nullable()->changeable();
            $table->string('phdtne4')->nullable()->changeable();
            $table->integer('student_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_h_d_progresses');
    }
}
