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
            $table->bigIncrements('id');
            $table->bigInteger('desig_id')->unsigned();
            $table->foreign('desig_id')
                ->references('id')
                ->on('designations');
            $table->bigInteger('dept_id')->unsigned();
            $table->foreign('dept_id')
                ->references('id')
                ->on('departments');
            $table->string('name');
            $table->string('email');
            $table->bigInteger('cnic');
            $table->string('gender');
            $table->date('dob');
            $table->string('martial_status')->nullable();
            $table->string('religion')->nullable();
            $table->bigInteger('tell_no');
            $table->string('city');
            $table->string('region')->nullable();
            $table->string('nationality');
            $table->integer('grade');
            $table->string('emp_status');
            $table->date('appoint_date');
            $table->date('retire_date');
            $table->string('address');
            $table->integer('children');
            $table->string('domicile')->nullable();
            $table->string('emp_job');
            $table->string('emp_type');
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
