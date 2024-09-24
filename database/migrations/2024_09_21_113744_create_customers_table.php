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
            $table->id('customer_id'); // Auto-incrementing primary key
            $table->string('customer_name'); // Should be string
            $table->string('address');
            $table->string('customer_phone'); // Should be string if it can contain characters like '+'
            $table->string('tin_number')->nullable();; // Should be string
            $table->date('start_date'); // Use date for date columns
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
