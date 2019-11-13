<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsertSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insert_schools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('schl_name');
            $table->string('schl_add');
            $table->string('ph_no');
            $table->string('principle_name');
            $table->string('website');
            $table->string('schl_logo');
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
        Schema::dropIfExists('insert_schools');
    }
}
