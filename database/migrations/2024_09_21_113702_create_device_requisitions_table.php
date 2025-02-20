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
        Schema::create('device_requisitions', function (Blueprint $table) {
            $table->id('requisition_id'); // Primary key
            $table->integer('user_id')->nullable(); // Foreign key
            $table->text('descriptions')->nullable(); // Additional descriptions
            $table->string('status')->nullable(); // Status of the requisition
            $table->date('dateofProvision')->nullable(); // Date of provision
            $table->integer('master')->default(0)->nullable(); // Master attribute as integer
            $table->integer('I_button')->default(0)->nullable(); // I_button attribute as integer
            $table->integer('buzzer')->default(0)->nullable(); // Buzzer attribute as integer
            $table->integer('panick_button')->default(0)->nullable();
            $table->string('dispatched_status')->default('available');
            $table->text('dispatched_imeis')->default('available');
            $table->string(column: 'approved_at')->nullable();
             // Panick_button attribute as integer
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_requisitions');
    }
};
