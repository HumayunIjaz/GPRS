<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviousexaminorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previousexaminors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->string('reconm');
            $table->integer('examdpc');
            $table->string('diary_no');
            $table->date('examdate');
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
        Schema::dropIfExists('previousexaminors');
    }
}
