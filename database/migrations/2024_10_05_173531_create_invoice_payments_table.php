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
            $table->string('invoice_number');
            $table->unsignedBigInteger('customer_id');
           $table->foreign('customer_id')->references('customer_id')->on('customers')->onDelete('cascade'); // Foreign key to customers table
            $table->date('due_date');
            $table->string('prepared_by');
            $table->string('plate_number');
            $table->string('tin_number');
            $table->text('descriptions');
            $table->integer('num_cars');
            $table->integer('periods');
            $table->date('from');
            $table->date('to');
            $table->string('payment_type');
            $table->decimal('debt', 10, 2);
            $table->decimal('unit_price', 10, 2);
            $table->decimal('gross_value', 10, 2);
            $table->decimal('vat_value', 10, 2);
            $table->decimal('vat_Inclusive', 10, 2);
            $table->decimal('total_value', 10, 2);
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('invoice_payments');
    }
}
