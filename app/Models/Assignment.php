<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{

    use HasFactory;

    protected $table = 'assignments';
    protected $primaryKey = 'assignment_id'; // Set the primary key to assignment_id
    public $incrementing = true; // Ensure auto-incrementing is enabled
    protected $keyType = 'int'; // The key type is integer

    protected $fillable = [
        'plate_number',
        'customer_id',
        'customer_phone',
        'customer_debt',
        'location',
        'user_id',
        'case_reported',
        'attachment',
        'assigned_by',
        'status',

    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'plate_number');
    }

    public function assignments()
{
    return $this->hasMany(Assignment::class);
}

}
