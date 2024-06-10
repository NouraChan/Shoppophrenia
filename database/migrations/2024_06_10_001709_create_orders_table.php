<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('total_price');
            $table->unsignedBigInteger('customer_custom');
            $table->foreign('customer_custom')->references('id')->on('users');
            $table->unsignedBigInteger('payment_custom');
            $table->foreign('payment_custom')->references('id')->on('payment');
            $table->unsignedBigInteger('shipment_custom');
            $table->foreign('shipment_custom')->references('id')->on('shipment');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
