<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    // Table name if different from the class name
    protected $table = 'assignments';

    // Primary key
    protected $primaryKey = 'assignment_id';

    // Mass assignable attributes
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
        'accepted_at',
    ];

    // If you have date attributes
    protected $dates = [
        'created_at',
        'updated_at',
        'accepted_at',
    ];

    // Relationships (example: with Customer model)
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
     // Define the relationship between Assignment and User
     public function user()
     {
         return $this->belongsTo(User::class,'user_id');
     }

     // If there's a relationship to Customer and Vehicle, define them as well


     public function vehicle()
     {
         return $this->belongsTo(Vehicle::class, 'plate_number','plate_number');
     }


}
