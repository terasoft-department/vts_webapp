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
        Schema::create('tdebts', function (Blueprint $table) {
        $table->id('tdebt_id');
        $table->string('invoice_number');
        $table->date('invoice_date');
        $table->integer('grand_total');
        $table->string('customername');
        $table->enum('status', ['Paid', 'Not Paid'])->default('Not Paid');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tdebts');
    }
};
