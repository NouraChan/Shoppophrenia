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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('shipment_date');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->decimal('total_price');
            $table->enum('method', ['credit' , 'cash' ,'paypal','check']);
            $table->enum('status' , ['inprogress','returned','delivered'])->default('inprogress');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
