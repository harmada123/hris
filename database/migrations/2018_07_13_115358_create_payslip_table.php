<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayslipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payslip', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->decimal('tax');
            $table->decimal('sss');
            $table->decimal('pagibig');
            $table->decimal('philhealth');
            $table->decimal('other_deduction');
            $table->decimal('late');
            $table->decimal('overtime');
            $table->decimal('allowance');
            $table->decimal('net');
            $table->decimal('gross');
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
        Schema::dropIfExists('payslip');
    }
}
