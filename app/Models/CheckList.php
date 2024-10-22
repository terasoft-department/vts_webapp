<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckList extends Model
{
    protected $table = 'check_lists';

    protected $primaryKey = 'check_id'; // Use the correct primary key

    protected $fillable = [
        'user_id',
        'vehicle_id',
        'customer_id',
        'plate_number',
        'rbt_status',
        'batt_status',
        'check_date',
    ];

    // Define the customer relationship
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id'); // Explicitly mention the foreign key
    }

    // Define the vehicle relationship
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id'); // Explicitly mention the foreign key
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
