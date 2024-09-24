<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\CustomerDebt;
use Carbon\Carbon;

class TrackCustomerDebts extends Command
{
    protected $signature = 'track:customer-debts';

    protected $description = 'Automatically tracks customer debts and updates monthly charges';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $today = Carbon::today();

        // Handle debts for purchase payments (after 4 months, charge 20000 TZS monthly)
        $purchaseDebts = CustomerDebt::where('payment_type', 'purchase')
                            ->where('next_due_date', '<=', $today)
                            ->where('status', 'unpaid')
                            ->get();

        foreach ($purchaseDebts as $debt) {
            // Add monthly charge of 20000 TZS after 4 months
            $debt->amount_due += 20000;
            $debt->next_due_date = Carbon::now()->addMonth(); // Set next due date for next month
            $debt->save();
        }

        // Handle debts for lease payments (Charge 45000 TZS every month)
        $leaseDebts = CustomerDebt::where('payment_type', 'lease')
                            ->where('next_due_date', '<=', $today)
                            ->where('status', 'unpaid')
                            ->get();

        foreach ($leaseDebts as $debt) {
            // Add monthly charge of 45000 TZS every month
            $debt->amount_due += 45000;
            $debt->next_due_date = Carbon::now()->addMonth(); // Set next due date for next month
            $debt->save();
        }

        $this->info('Customer debts have been updated successfully.');
    }
}
