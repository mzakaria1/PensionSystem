<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePensionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pensioners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('emp_id')->unsigned();
            $table->string('cost_center');
            $table->string('record_office')->nullable();
            $table->integer('last_salary');
            $table->string('payment_mode');
            $table->integer('pension_amount');
            $table->string('status');
            $table->timestamps();

            $table->foreign('emp_id')
                    ->references('id')
                    ->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pensioners');
    }
}
