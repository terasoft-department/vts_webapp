<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('invoice_payments', function (Blueprint $table) {
            $table->id('invoice_id')->unique();
            $table->string('invoice_number')->nullable();
            $table->unsignedBigInteger('customer_id')->nullable();
           $table->foreign('customer_id')->references('customer_id')->on('customers')->onDelete('cascade')->nullable(); // Foreign key to customers table
            $table->date('due_date')->nullable();
            $table->string('prepared_by')->nullable();
            $table->string('plate_number')->nullable();
            $table->string('tin_number')->nullable();
            $table->text('descriptions')->nullable();
            $table->integer('num_cars')->nullable();
            $table->integer('periods')->nullable();
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            $table->string('payment_type')->nullable();
            $table->decimal('debt', 10, 2)->nullable();
            $table->decimal('unit_price', 10, 2)->nullable();
            $table->decimal('gross_value', 10, 2)->nullable();
            $table->decimal('vat_value', 10, 2)->nullable();
            $table->decimal('vat_Inclusive', 10, 2)->nullable();
            $table->decimal('total_value', 10, 2)->nullable();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('invoice_payments');
    }
}
