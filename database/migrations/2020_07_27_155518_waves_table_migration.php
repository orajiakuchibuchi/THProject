<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WavesTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('waves', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('email')->nullable();
        //     $table->string('name')->nullable();
        //     $table->string('is_creative')->nullable();
        //     $table->string('phone')->nullable();
        //     $table->string('number_of_followers')->nullable();
        //     $table->longText('video_content')->nullable();
        //     $table->longText('intend_to_sell')->nullable();
        //     $table->longText('images_and_videos')->nullable();
        //     $table->longText('reaching_method')->nullable();
        //     $table->longText('how_to_post_content')->nullable();
        //     $table->longText('feedback')->nullable();
        //     $table->longText('suggestion_recommendation')->nullable();
        //     $table->timestamp('deleted_at')->nullable();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('waves');
    }
}
