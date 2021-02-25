<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtensionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extensions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id');
            $table->string('diary_no');
            $table->date('date');
            $table->timestamps();
            $table->string('dpc_no')->nullable()->changeable();
            $table->string('dpc')->nullable()->changeable();
            $table->date('dpcdate')->nullable()->changeable();
            $table->string('dpcreomnd')->nullable()->changeable();
            $table->string('dpcc')->nullable()->changeable();
            $table->date('dpccdate')->nullable()->changeable();
            $table->string('asrb')->nullable()->changeable();
            $table->date('asrbdate')->nullable()->changeable();
            $table->date('extension')->nullable()->changeable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extensions');
    }
}
