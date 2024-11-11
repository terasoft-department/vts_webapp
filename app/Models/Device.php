<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    // Set the primary key
    protected $primaryKey = 'device_id';

    // Allow mass assignment on the following attributes
    protected $fillable = [
        'imei_number',
        // 'device_model',
        'category',
        'dispatched_status',
    ];

    // Specify the table name if it's different from the plural of the model name
    protected $table = 'devices';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
