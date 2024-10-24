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
        Schema::create('customers', function (Blueprint $table) {
            $table->id( 'customer_id');// Auto-incrementing primary key
            $table->string('customername')->nullable();// Should be string
            $table->string('address')->nullable();
            $table->string('customer_phone')->nullable();// Should be string if it can contain characters like '+'
            $table->string('tin_number')->nullable();// Should be string
            $table->string('email')->unique();// Customer email, must be unique
            $table->date('start_date')->nullable();// Use date for date columns
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
