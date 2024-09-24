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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('device_id');
            $table->enum('payment_type', ['lease', 'purchase']); // Lease or Purchase
            $table->decimal('initial_payment', 10, 2)->default(0); // Amount for first payment
            $table->decimal('monthly_payment', 10, 2)->default(0); // Monthly fee
            $table->date('next_due_date'); // Next payment due date
            $table->enum('status', ['pending', 'paid', 'overdue'])->default('pending');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
