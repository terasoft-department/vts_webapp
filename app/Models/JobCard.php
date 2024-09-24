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
        'user_id',
        'customername',
        'contact_person',
        'title',
        'mobile_number',
        'physical_location',
        'device_id',
        'problem_reported',
        'date_attended',
        'natureOf_ProblemAt_site',
        'service_type',
        'work_done',
        'vehicle_regno',
        'client_comment',
    ];
}
