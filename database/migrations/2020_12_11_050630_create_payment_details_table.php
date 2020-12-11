<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_details', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('amount');
            $table->string('paid_at');
            $table->string('channel');
            $table->string('currency');
            $table->string('ip_address');
            $table->string('user_id');
            $table->string('mobile');
            $table->string('status');
            $table->string('customer_id');
            $table->string('customer_email');
            $table->string('customer_code');
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
        Schema::dropIfExists('payment_details');
    }
}
