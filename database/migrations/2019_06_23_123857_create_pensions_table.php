<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePensionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pensions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pensioner_id')->unsigned();
            $table->integer('net_pension');
            $table->integer('last_pension')->nullable();
            $table->timestamps();

            $table->foreign('pensioner_id')
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
        Schema::dropIfExists('pensions');
    }
}
