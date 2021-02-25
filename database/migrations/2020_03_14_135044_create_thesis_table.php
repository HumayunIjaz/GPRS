<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateThesisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dairy_no');
            $table->date('date');
            $table->string('title');
            $table->string('supervisor');
            $table->string('csupervisor')->nullable()->changeable();
            $table->string('recomnddpcc')->nullable()->changeable();
            $table->integer('dpc')->nullable()->changeable();
           $table->string('pdf_file')->nullable()->changeable();
            $table->string('DNo')->nullable()->changeable();
            $table->string('date1')->nullable()->changeable();
            $table->integer('student_id')->nullable()->changeable();
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
        Schema::dropIfExists('theses');
    }
}
