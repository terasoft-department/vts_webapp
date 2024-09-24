<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentReport extends Model
{
    use HasFactory;
    protected $table='payment_reports';
protected $fillable=[
    'customer_name' ,
    'invoice_id' ,
    'due_date',
    'prepared_by' ,
    'plate_number' ,
    'tin_number' ,
    'descriptions',
    'num_cars',
    'periods',
    'from' ,
    'to' ,
    'payment_type' ,
    'unit_price',
    'gross_value',
    'vat_value',
    'total_value',];
}
