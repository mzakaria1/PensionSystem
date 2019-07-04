<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('acc_id')->unsigned();
            $table->bigInteger('acc_pensioner_id')->unsigned();
            $table->integer('amount');
            $table->string('month');
            $table->year('fiscal_period');
            $table->timestamps();

            $table->foreign('acc_id')
                ->references('id')
                ->on('bank_accounts');

            $table->foreign('acc_pensioner_id')
                ->references('id')
                ->on('pensioners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
