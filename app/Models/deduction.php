<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deduction extends Model
{
    use HasFactory;

    protected $primaryKey = 'tdebt_id';

    protected $fillable = [
        'invoice_number',
        'invoice_date',
        'grand_total',
        'deduction',
        'customername',
        'status'
    ];

    // Method to calculate the final total after deduction
    public function getFinalTotalAttribute()
    {
        return $this->grand_total - $this->deduction;
    }
}
