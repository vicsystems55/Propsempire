<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {

            $table->id();
            $table->string('category')->nullable();
            $table->string('type')->nullable();
            $table->string('subtype')->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('toilet')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('furnished')->nullable();
            $table->string('parking')->nullable();
            $table->string('featured_img4')->nullable();
            $table->string('featured_img5')->nullable();
            $table->string('featured_img6')->nullable();
            $table->string('featured_img7')->nullable();
            $table->string('featured_img8')->nullable();
            $table->string('total_area')->nullable();
            $table->string('covered_area')->nullable();
            $table->string('state')->nullable();
            $table->string('capital')->nullable();
            $table->string('country')->nullable();
            $table->string('lga')->nullable();
            $table->string('status')->nullable();

           

            

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
        Schema::dropIfExists('features');
    }
}
