<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Installation extends Model
{
    use HasFactory;

    // Set the primary key
    protected $primaryKey = 'installation_id';

    // Allow mass assignment on the following attributes
    protected $fillable = [
    'imei_number',
    'customername',
    'amount_paid',
    'user_id',
    'status',
];

    // Specify the table name if it's different from the plural of the model name
    protected $table = 'installations';

    /**
     * Get the device associated with the installation.
     */

    /**
     * Get the customer associated with the installation.
     */


     public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id'); // Link 'user_id' to 'id'
    }
}

