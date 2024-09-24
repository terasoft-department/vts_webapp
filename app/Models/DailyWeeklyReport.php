<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyWeeklyReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'reported_date',
        'customer_name',
        'bus_plate_number',
        'contact',
        'reported_by',
        'reported_case',
        'assigned_technician',
        'findings',
        'response_status',
        'response_date',
    ];
}

