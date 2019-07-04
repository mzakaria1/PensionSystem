<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pensioner_id')->unsigned();
            $table->bigInteger('bank_id')->unsigned();
            $table->integer('acc_no');
            $table->timestamps();

            $table->foreign('pensioner_id')
                    ->references('id')
                    ->on('pensioners');

            $table->foreign('bank_id')
                    ->references('id')
                    ->on('banks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_accounts');
    }
}
