<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->string('pro1')->nullable()->changeable();
            $table->string('pro2')->nullable()->changeable();
            $table->string('pro3')->nullable()->changeable();
            $table->string('pro4')->nullable()->changeable();
            $table->string('pro5')->nullable()->changeable();
            $table->string('pro6')->nullable()->changeable();
            $table->string('pro7')->nullable()->changeable();
            $table->string('sms1');
            $table->string('sms2')->nullable()->changeable();
            $table->string('sms3')->nullable()->changeable();
            $table->string('sms4')->nullable()->changeable();
            $table->string('tne1')->nullable()->changeable();
            $table->string('tne2')->nullable()->changeable();
            $table->string('tne3')->nullable()->changeable();
            $table->string('tne4')->nullable()->changeable();
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
        Schema::dropIfExists('progresses');
    }
}
