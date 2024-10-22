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
            $table->string('customername');
            $table->string('category');
            $table->string('device_name');
            $table->string('amount');
            $table->date('from_date');
            $table->date('up_todate');
            $table->string('status');
             $table->string('debt');
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
