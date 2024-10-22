<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $primarykey = "invoice_id";
    protected $fillable = [
        'invoice_number',
        'invoice_date',
        'grand_total',
        'customername',
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }

}
