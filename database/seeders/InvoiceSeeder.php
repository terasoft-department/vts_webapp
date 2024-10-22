<?php

use App\Models\Invoice;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    public function run()
    {
        Invoice::create([
            'invoice_number' => 'EC241051',
            'invoice_date' => '2024-10-05',
            'grand_total' => 7463264,
            'customer' => 'FLEET TRACK LTD',
            'status' => 'Not Paid',
        ]);

        Invoice::create([
            'invoice_number' => 'EC248132',
            'invoice_date' => '2024-08-13',
            'grand_total' => 920000,
            'customer' => 'FMS CLEARING AND FORWARDING',
            'status' => 'Paid',
        ]);
    }
}

