<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePayment extends Model
{
    use HasFactory;
     protected $table="invoice_payments";
    protected $primarykey="invoice_id";
    protected $fillable = [
        'invoice_number','status', 'customer_id', 'due_date', 'prepared_by', 'plate_number',
        'tin_number', 'descriptions', 'num_cars', 'periods', 'from', 'to',
        'payment_type','debt', 'unit_price', 'gross_value', 'vat_value','vat_Inclusive', 'total_value'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }
}

