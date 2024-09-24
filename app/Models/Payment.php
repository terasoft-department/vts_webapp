<?php

namespace App\Models;
use App\Models\Customer;
use App\Models\Device;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $dates = ['next_due_date'];
    protected $table ='payments';
    protected $fillable = [
        'customer_id',
        'device_id',
        'payment_type',
        'initial_payment',
        'monthly_payment',
        'next_due_date',
        'status'
    ];

    // Relating payments to customers and devices
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    // Function to check if payment is overdue
    public function isOverdue()
    {
        return $this->next_due_date < now() && $this->status !== 'paid';
    }
}
