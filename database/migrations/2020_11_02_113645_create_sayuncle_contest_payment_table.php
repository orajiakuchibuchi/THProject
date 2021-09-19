<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSayuncleContestPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sayuncle_contest_payment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sayuncle_contestant_id');
            $table->bigInteger('sayuncle_contestant_video_id');
            $table->float('amount',10,2)->nullable();
            $table->string('currency')->nullable();
            $table->string('status')->nullable();
            $table->boolean('is_live')->nullable();
            $table->string('tx_ref')->nullable();
            $table->string('order_ref')->nullable();
            $table->string('flw_ref')->nullable();
            $table->string('device_fingerprint')->nullable();
            $table->string('rav_ref')->nullable();
            $table->string('account_id')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('ip')->nullable();
            $table->string('charge_response_code')->nullable();
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
        Schema::dropIfExists('sayuncle_contest_payment');
    }
}
