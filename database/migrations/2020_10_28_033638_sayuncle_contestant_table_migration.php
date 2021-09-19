<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SayuncleContestantTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sayuncle_contestants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('age')->nullable();
            $table->enum('i_am', ['student', 'employee','employer','entreprenuer'])->nullable();
            $table->enum('consider_myself', ['vendor', 'influencer','content_provider','all','none'])->nullable();
            $table->enum('gender', ['male', 'female','other'])->nullable();
            $table->string('ig_handle')->nullable();
            $table->string('ig_followers')->nullable();
            $table->string('nationality')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('hear_of')->nullable();
            $table->boolean('future_contest')->nullable();
            $table->boolean('help_available')->nullable();
            $table->text('auth_token')->nullable();
            $table->string('contestant_id')->nullable();
            $table->string('image_name')->nullable();
            $table->string('image_path')->nullable();
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
        Schema::dropIfExists('sayuncle_contestant');
    }
}
