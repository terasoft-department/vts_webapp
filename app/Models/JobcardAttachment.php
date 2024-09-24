<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobcardAttachment extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'jobcard_attachments';

    // Define the primary key
    protected $primaryKey = 'attach_id';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'user_id',
        'vehicle_regno',
        'pre_workdone_picture',
        'post_workdone_picture',
        'carPlateNumber_picture',
        'tampering_evidence_picture',
    ];

    // If user_id references a user, define the relationship
      public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
