<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('posted_by')->unsigned();
            $table->string('title');
            $table->string('description');
            $table->string('location');
            $table->string('featured_img1');
            $table->string('featured_img2')->nullable();
            $table->string('featured_img3')->nullable();
            $table->double('min_price');
            $table->double('max_price');
            $table->string('status');
            
            $table->integer('views')->default('0');
            $table->integer('likes')->default('0');
            $table->integer('unlikes')->default('0');

            $table->bigInteger('features_id')->unsigned();

            $table->foreign('posted_by')->references('id')->on('users');
            $table->foreign('features_id')->references('id')->on('features');


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
        Schema::dropIfExists('listings');
    }
}
