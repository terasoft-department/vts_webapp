<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyWeeklyReport extends Model
{
    use HasFactory;
protected $primarykey ='daily_id';
    protected $fillable = [
        'reported_date',
        'customer_id',
        'bus_plate_number',
        'contact',
        'reported_by',
        'reported_case',
        'assigned_technician',
        'findings',
        'response_status',
        'response_date',
    ];

    // Query Scope for Date Filtering
    public function scopeFilterByDate($query, $startDate, $endDate)
    {
        return $query->whereBetween('reported_date', [$startDate, $endDate]);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}

