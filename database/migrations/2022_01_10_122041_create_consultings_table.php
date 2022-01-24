<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trans_id')->unique(true);
            $table->string('reg_date');
            $table->string('passport');
            $table->string('diet');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('othername');
            $table->enum('gender', ['male', 'female']);
            $table->string('sponsor');
            $table->string('homeaddress');
            $table->string('employer');
            $table->string('phonenumber');
            $table->string('email');
            $table->string('qualifications');
            $table->string('trainingmethod');
            $table->string('trainingtype');
            $table->string('maritalstatus');
            $table->string('howdidyouknow');
            $table->string('studentStatus');
            $table->string('total');
            $table->string('ihaveread');
            $table->string('types');
            $table->string('foreignexam');
            $table->string('foreignType');
            $table->string('foreignTypePayment');
            $table->string('foreignTotal');
            $table->float('amount',10,2)->nullable();
            $table->string('currency')->nullable();
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
            $table->string('status')->nullable();
            $table->boolean('payment_status')->default(0);
            $table->boolean('is_completed')->default(0);
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
        Schema::dropIfExists('consultings');
    }
}
