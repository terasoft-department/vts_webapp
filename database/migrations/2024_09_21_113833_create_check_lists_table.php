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
        Schema::create('check_lists', function (Blueprint $table) {
            $table->id('check_id'); // Primary key
            $table->integer('user_id');
           $table->string('vehicle_name')->nullable();
           $table->string('category')->nullable();
           $table->string('customername')->nullable(); // Foreign key
           $table->string('plate_number')->nullable(); // Vehicle plate number
            $table->string('rbt_status')->nullable();
            $table->string('batt_status')->nullable();
             $table->string('check_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_lists');
    }
};
