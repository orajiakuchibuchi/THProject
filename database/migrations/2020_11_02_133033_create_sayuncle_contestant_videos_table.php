<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSayuncleContestantVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sayuncle_contestant_videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sayuncle_contestant_id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('file_path')->nullable();
            $table->string('file_name')->nullable();
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
        Schema::dropIfExists('sayuncle_contestant_videos');
    }
}
