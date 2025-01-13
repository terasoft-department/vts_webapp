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
            $table->date('reported_date')->nullable();
            $table->string('bus_company')->nullable();
            $table->string('bus_number')->nullable();
            $table->string('contact')->nullable();
            $table->string('reported_by')->nullable();
            $table->string('reported_case')->nullable();
            $table->string('assigned_technician')->nullable();
            $table->text('findings')->nullable();
            $table->string('response_status')->nullable();
            $table->date('response_date')->nullable();
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
