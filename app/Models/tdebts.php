<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tdebts extends Model
{
    use HasFactory;
    protected $primaryKey='tdebts';
    protected $fillable = [

        'invoice_id',
        'invoice_number',
        'invoice_date',
        'grand_total',
        'customername',
        'status',
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id'); // Explicitly mention the foreign key
    }
    


}
