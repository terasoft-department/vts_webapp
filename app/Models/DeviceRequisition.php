<?php

namespace App\Models;
use App\Models\user;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceRequisition extends Model
{
    use HasFactory;

    // Set the primary key
    protected $primaryKey = 'requisition_id';

    // Allow mass assignment on the following attributes
    protected $fillable = [
        'user_id',
        'descriptions',
        'status',
        'dateofProvision',
        'master',
        'I_button',
        'buzzer',
        'panick_button',
        'dispatched_status'

    ];

    // Specify the table name if it's different from the plural of the model name
    protected $table = 'device_requisitions';

    /**
     * Get the user that made the requisition.
     */
     // Define the relationship with the Device model

     public function device()
     {
         return $this->belongsTo(Device::class, 'device_id');
     }

     // Optionally, define the relationship with the User model if needed
     public function user()
     {
         return $this->belongsTo(User::class, 'user_id');
     }

     // Define the scope for filtering by device categories
     public function scopeFilterByCategories($query, $categories)
     {
         // Filter the requisitions by device category using the relationship
         return $query->whereHas('device', function ($query) use ($categories) {
             $query->whereIn('category', $categories);  // Match against the device categories
         });
     }

}
