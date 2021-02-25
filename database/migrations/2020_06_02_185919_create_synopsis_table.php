<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSynopsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('synopses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dairy_no');
            $table->date('date');
            $table->string('title');
            $table->string('supervisor');
            $table->string('csupervisor')->nullable()->changeable();
            $table->string('pdf_file')->nullable()->changeable();
            $table->string('asrbpdf_file')->nullable()->changeable();
            $table->string('recomnddpcc')->nullable()->changeable();
            $table->integer('dpc')->nullable()->changeable();
            $table->string('DNo')->nullable()->changeable();
            $table->string('date1')->nullable()->changeable();
            $table->string('synopsis_dpcc')->nullable()->changeable();
            $table->string('dpcc_date')->nullable()->changeable();
            $table->string('synopsis_asrb')->nullable()->changeable();
            $table->string('asrb_date')->nullable()->changeable();
            $table->integer('student_id');
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
        Schema::dropIfExists('synopses');
    }
}
