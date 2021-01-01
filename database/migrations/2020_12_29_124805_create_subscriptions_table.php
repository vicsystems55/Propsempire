<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('listing_id')->unsigned()->unique();
            $table->bigInteger('subscription_plan_id')->unsigned();
            $table->bigInteger('agent_id')->unsigned();
            $table->string('status')->default('active');

            $table->string('slug');

            $table->foreign('agent_id')->references('id')->on('users');
            $table->foreign('listing_id')->references('id')->on('listings');
            $table->foreign('subscription_plan_id')->references('id')->on('subscription_plans');
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
        Schema::dropIfExists('subscriptions');
    }
}
