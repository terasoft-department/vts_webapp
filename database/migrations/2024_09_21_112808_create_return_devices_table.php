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
        Schema::create('return_devices', function (Blueprint $table) {
            $table->id('return_id'); // Primary key
            $table->integer('user_id')->nullable(); // Foreign key
              $table->string('customername'); // Device number
            $table->string('device_category'); // Device number
            $table->string('devicenumber'); // Device number
            $table->string('vehiclenumber'); // Vehicle number
            $table->text('reason'); // Reason for return
            $table->enum('status', ['approved', 'not approved'])->nullable(); // Status of the return
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return_devices');
    }
};
