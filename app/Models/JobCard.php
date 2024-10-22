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
        'user_id',
        'assignment_id',
        'contact_person',
        'title',
        'mobile_number',
        'physical_location',
        'problem_reported',
        'natureOf_ProblemAt_site',
        'service_type',
        'date_attended',
        'plate_number',
        'imei_number',
        'work_done',
        'client_comment',
        'pre_workdone_picture',
        'post_workdone_picture',
        'carPlateNumber_picture',
        'tampering_evidence_picture',
   ];

}
