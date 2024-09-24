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
        Schema::create('device_requisitions', function (Blueprint $table) {
            $table->id('requisition_id'); // Primary key
            $table->unsignedBigInteger('user_id'); // Foreign key
            $table->string('category'); // Category of the device
            $table->integer('quantity'); // Quantity of devices
            $table->text('descriptions')->nullable(); // Additional descriptions
            $table->string('status')->nullable(); // Status of the requisition
            $table->date('dateofProvision')->nullable(); // Date of provision
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_requisitions');
    }
};
