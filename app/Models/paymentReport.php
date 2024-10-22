<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentReport extends Model
{
    use HasFactory;

    // Define the table name, if it is not the plural of the model name
    protected $table = 'payment_reports';
    protected $primaryKey = 'payment_id';
    // Define the fillable fields
    protected $fillable = [
        'invoice_id',
        'status',
        'invoice_number',
        'due_date',
        'total_value',
        'customer_id',

    ];

    // Relationship with InvoicePayment model
    public function invoicePayment()
    {
        return $this->belongsTo(InvoicePayment::class, 'invoice_id', 'invoice_id');
    }

    // Relationship with Customer model
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }
}
