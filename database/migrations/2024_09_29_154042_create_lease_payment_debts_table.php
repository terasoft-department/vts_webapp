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
        Schema::create('lease_payment_debts', function (Blueprint $table) {
            $table->id();
            $table->string('customername')->nullable();
            $table->string('category')->nullable();
            $table->string('device_name')->nullable();
            $table->string('amount')->nullable();
            $table->date('from_date')->nullable();
            $table->date('up_todate')->nullable();
            $table->string('status')->nullable();
             $table->string('debt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lease_payment_debts');
    }
};
