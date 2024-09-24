<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnDevice extends Model
{
    use HasFactory;

    protected $primaryKey = 'return_id';

    // Allow mass assignment on the following attributes
    protected $fillable = [
        'user_id',
        'customername',
        'device_category',
        'device_category',
        'devicenumber',
        'vehiclenumber',
        'reason', // Add to fillable attributes
        'status', // Add to fillable attributes
    ];

    protected $table = 'return_devices';

    /**
     * Get the user that made the return.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
