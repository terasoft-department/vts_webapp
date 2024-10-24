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
        Schema::create('invoices', function (Blueprint $table) {
        $table->id();
        $table->string('invoice_number')->nullable();
        $table->date('invoice_date')->nullable();
        $table->integer('grand_total')->nullable();
        $table->string('customername')->nullable();
        $table->enum('status', ['Paid', 'Not Paid'])->default('Not Paid')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
