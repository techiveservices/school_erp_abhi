<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_students', function (Blueprint $table) {
            $table->bigIncrements('s_id');
            $table->integer('school_id');
            $table->string('name');
            $table->integer('class_id');
            $table->string('section');
            $table->string('email');
            $table->string('username');
            $table->string('pwd');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('address');
            $table->string('mob_no1');
            $table->string('mob_no2');
            $table->string('dob');
            $table->string('parent_email');
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
        Schema::dropIfExists('create_students');
    }
}
