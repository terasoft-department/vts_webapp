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
        Schema::create('assignments', function (Blueprint $table) {
            
            $table->bigIncrements('assignment_id'); // Auto-incrementing primary key
            $table->string('plate_number');
            $table->integer('customer_id')->unique();
            $table->string('customer_phone');
            $table->decimal('customer_debt', 10, 2); // Decimal for currency
            $table->string('location');
            $table->string('user_id'); // Corrected typo
            $table->text('case_reported'); // Use text for longer case reports
            $table->string('attachment')->nullable(); // Nullable attachment field

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
