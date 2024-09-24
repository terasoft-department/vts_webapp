<?php

namespace App\Models;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VehicleController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'invoice_id',
        'due_date',
        'prepared_by',
        'plate_number',
        'tin_number',
        'descriptions',
        'num_cars',
        'periods',
        'payment_type',
        'unit_price',
        'gross_value',
        'vat_value',
        'total_value',
    ];
    // public function customer()
    // {
    //     return $this->belongsTo(CustomerController::class, 'customer_name');
    // }

    // public function vehicle()
    // {
    //     return $this->belongsTo(VehicleController::class, 'plate_number');
    // }
}
