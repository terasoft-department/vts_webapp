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
        Schema::create('jobcard_attachments', function (Blueprint $table) {
            $table->id('attach_id'); // Primary key
            $table->string('preattachment_picture')->nullable(); // Pre-attachment picture
            $table->string('postattachment_picture')->nullable(); // Post-attachment picture
            $table->string('car_plateEvidence_picture')->nullable(); // Car plate evidence picture
            $table->string('tempering_picture')->nullable(); // Tempering picture
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobcard_attachments');
    }
};
