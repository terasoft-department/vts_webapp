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
        Schema::create('daily_weekly_reports', function (Blueprint $table) {
            $table->id();
            $table->date('reported_date');
            $table->string('customer_name');
            $table->string('bus_plate_number');
            $table->string('contact');
            $table->string('reported_by');
            $table->string('reported_case');
            $table->string('assigned_technician');
            $table->text('findings');
            $table->string('response_status');
            $table->date('response_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_weekly_reports');
    }
};
