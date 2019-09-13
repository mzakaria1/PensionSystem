<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arrears', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pen_id')->unsigned();
            $table->integer('amount');
            $table->string('status');
            $table->string('month');
            $table->year('fiscal_period');
            $table->timestamps();

            $table->foreign('pen_id')
                ->references('id')
                ->on('pensions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arrears');
    }
}
