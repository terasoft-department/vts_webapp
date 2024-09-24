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
        'category',
        'quantity',
        'descriptions',
        'status',
        'dateofProvision',
    ];

    // Specify the table name if it's different from the plural of the model name
    protected $table = 'device_requisitions';

    /**
     * Get the user that made the requisition.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
