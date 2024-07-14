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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string ('fullname')->nullable();
            $table->string('phone_number')->nullable();
            $table->enum('role',['customer','seller','admin'])->default('customer');
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('user_img')->nullable();
            $table->string('address')->nullable(); 
            $table->string('birthday');
            $table->foreignId('user_id')->constrained();
            $table->string('serial_key')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};