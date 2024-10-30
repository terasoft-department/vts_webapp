<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnDevice extends Model
{
    use HasFactory;

    protected $primaryKey = 'return_id';

    protected $fillable = [
        'user_id',
        'plate_number',
        'vehicle_id',
        'imei_number',
        'reason',
        'status',
        'customer_id',
    ];

    protected $table = 'return_devices';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'vehicle_id');
    }

    public function jobcard()
    {
        return $this->belongsTo(JobCard::class, 'plate_number', 'plate_number');
    }

    // Access the IMEI number from the related JobCard
    public function getImeiNumberAttribute()
    {
        return $this->jobcard->imei_number ?? 'N/A';
    }
}
