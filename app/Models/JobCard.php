<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCard extends Model
{use HasFactory;

    protected $table = 'jobcards'; // Ensure this matches the migration
    protected $primaryKey = 'jobcard_id';
    public $timestamps = true;

    protected $fillable = [
       'customer_id',
        'contact_person',
        'mobile_number',
        'vehicle_regNo',
        'title',
        'physical_location',
        'plate_number',
        'problem_reported',
        'natureOf_ProblemAt_site',
        'service_type',
        'date_attended',
        'work_done',
        'imei_number',
        'client_comment',
        'user_id',
        'pre_workdone_picture',
        'post_workdone_picture',
        'carPlateNumber_picture',
        'tampering_evidence_picture'
   ];

// Define relationships if applicable (e.g., belongsTo for customer or user)
public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    // Relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
