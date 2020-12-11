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
            $table->string('slug');
            $table->bigInteger('posted_by')->unsigned();
            $table->string('title');
            $table->string('description');
            $table->string('location');
            $table->string('featured_img1')->default('default.png');
            $table->string('featured_img2')->nullable();
            $table->string('featured_img3')->nullable();
            $table->string('featured_img4')->nullable();
            $table->string('category');
            $table->string('subtype');
            $table->string('type');
            $table->integer('bedrooms')->unsigned();
            $table->integer('toilets')->unsigned();
            $table->integer('bathrooms')->unsigned();
            $table->boolean('furnished')->default(0);
            $table->boolean('parking')->default(0);
            $table->double('min_price');
            $table->double('max_price');
            $table->string('status')->default('inactive');

            $table->string('class')->default('standard');

            $table->integer('views')->default('0');
            $table->integer('likes')->default('0');
            $table->integer('unlikes')->default('0');

          

            $table->foreign('posted_by')->references('id')->on('users');
      


            $table->timestamps();
        });
    }

    // just a random string generator
  

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
