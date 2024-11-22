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

            $table->bigIncrements('assignment_id');// Auto-incrementing primary key
            $table->string('plate_number')->nullable();
            $table->integer('customer_id')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_debt')->nullable();//  for currency
            $table->string('location')->nullable();
            $table->string('user_id')->nullable(); // Corrected typo
            $table->text('case_reported')->nullable(); // Use text for longer case reports
            $table->string('attachment')->nullable(); // Nullable attachment field
            $table->string('assigned_by')->nullable();
            $table->string('status')->nullable();
            $table->string('accepted_at')->nullable();
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
