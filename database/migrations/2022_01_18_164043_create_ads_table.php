<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('first_left_img_url')->nullable();
            $table->string('first_left_img_target_url')->nullable();
            $table->string('first_right_img_url')->nullable();
            $table->string('first_right_img_target_url')->nullable();
            $table->string('secound_right_img_url')->nullable();
            $table->string('secound_right_img_target_url')->nullable();
            $table->string('hole_world_img_url')->nullable();
            $table->string('hole_world_img_target_url')->nullable();
            $table->string('our_advertisement')->nullable();
            $table->string('our_advertisement_target_url')->nullable();
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
        Schema::dropIfExists('ads');
    }
}
