<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('address')->nullable();
            $table->integer('resume_id')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('department_id')->nullable();
            $table->integer('sched_id')->nullable();
            $table->string('skill')->nullable();
            $table->decimal('salary')->nullable();
            $table->string('sss')->nullable();
            $table->string('tin')->nullable();
            $table->string('pagibig')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
