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
        Schema::create('invoice_payments', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('customer_name');
            $table->string('invoice_id');
            $table->date('due_date');
            $table->string('prepared_by');
            $table->string('plate_number');
            $table->string('tin_number');
            $table->string('descriptions');
            $table->integer('num_cars');
            $table->integer('periods');
            $table->enum('payment_type', ['lease', 'purchase']);
            $table->decimal('unit_price', 10, 2);
            $table->decimal('gross_value', 10, 2);
            $table->decimal('vat_value', 10, 2);
            $table->decimal('total_value', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_payments');
    }
};
