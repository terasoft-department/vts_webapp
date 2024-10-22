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
        Schema::create('devices', function (Blueprint $table) {
            $table->id('device_id'); // Primary key
            $table->string('imei_number'); // IMEI number eg:T540DRM
            $table->enum('category', ['master','I_button', 'buzzer', 'panick_button']);
            $table->integer('total'); // Total quantity
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
