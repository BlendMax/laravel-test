<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('from_id');
            $table->foreign('from_id')->references('id')->on('currencies')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('to_id');
            $table->foreign('to_id')->references('id')->on('currencies')->onDelete('cascade')->onUpdate('cascade');
            $table->float('ratio');
            $table->date('update_date');
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
        Schema::dropIfExists('rates');
    }
}
