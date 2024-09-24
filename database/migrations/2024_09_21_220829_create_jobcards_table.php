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
        Schema::create('jobcards', function (Blueprint $table) {
            $table->id('jobcard_id');
            $table->integer('user_id');
            $table->string('customername');
            $table->string('contact_person');
            $table->string('title')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('physical_location');
            $table->integer('device_id')->nullable();
            $table->string('problem_reported');
            $table->date('date_attended');
            $table->enum('natureOf_ProblemAt_site', ['sim card problem', 'wiring problem', 'loose connection','tampering by using ignition system','tampering by using switch','tampering by using ground','tampering by using earth wire','device location','device is worn out','Car electrical system','Swollen Battery','Eaten wires', 'others']);
            $table->enum('service_type', ['new installation', 'skipping', 'noTransmission', 'others']);
            $table->text('work_done');
            $table->string('vehicle_regno');
            $table->text('client_comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobcards');
    }
};
