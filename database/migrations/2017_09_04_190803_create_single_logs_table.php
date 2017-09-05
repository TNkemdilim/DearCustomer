<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSingleLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->integer('custom_message_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->timestamps();

            //foreign keys
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('custom_message_id')->references('id')->on('custom_messages');
            $table->foreign('group_id')->references('id')->on('group_logs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('single_logs');
    }
}
