<?php

namespace App\Imports;

use App\Models\Payment;
use Maatwebsite\Excel\Concerns\ToModel;

class PaymentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Payment([
            'customer_id' => $row[0],
            'device_id' => $row[1],
            'payment_type' => $row[2],
            'initial_payment' => $row[3],
            'monthly_payment' => $row[4],
            'next_due_date' => \Carbon\Carbon::createFromFormat('Y-m-d', $row[5]),
            'status' => 'pending',
        ]);
    }
}
