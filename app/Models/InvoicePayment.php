<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePayment extends Model
{
    use HasFactory;

    protected $table = "invoice_payments";
    protected $primaryKey = "invoice_id"; // Corrected the case to 'primaryKey'

    protected $fillable = [
        'invoice_number', 'status', 'customer_id', 'due_date', 'prepared_by',
        'plate_number', 'tin_number', 'descriptions', 'num_cars', 'periods',
        'from', 'to', 'payment_type', 'debt', 'unit_price',
        'gross_value', 'vat_value', 'vat_Inclusive', 'total_value'
    ];

    // Add this line to specify the date attributes
    protected $casts = [
        'due_date' => 'datetime', // or 'date' if you prefer only the date part
        'from' => 'datetime',
        'to' => 'datetime',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }
}

