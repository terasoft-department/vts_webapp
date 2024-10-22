<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    // Set the primary key
    protected $primaryKey = 'vehicles_id';

    // Allow mass assignment on the following attributes
    protected $fillable = [
        'vehicle_name',
        'category',
        'customer_id',
        'plate_number',
    ];

    protected $table = 'vehicles';


    /**
     * Get the customer that owns the vehicle.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }
    public function checklists()
{
    return $this->hasMany(CheckList::class);
}
public function invoices()
{
    return $this->hasMany(InvoicePayment::class, 'vehicle_id');
}

}
