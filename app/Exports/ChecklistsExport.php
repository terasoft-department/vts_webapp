<?php

namespace App\Exports;

use App\Models\CheckList;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ChecklistsExport implements FromCollection, WithHeadings, WithMapping
{
    protected $request;
    // Accept request to filter results (if needed)
    public function __construct($request)
    {
        $this->request = $request;
    }

    // Fetch the data for the export
    public function collection()
    {
        // Use any necessary filtering logic from the request
        return CheckList::whereBetween('check_date', [$this->request->from_date, $this->request->to_date])->get();
    }

    // Define the headings for the Excel file
    public function headings(): array
    {
        return [
            'Technician',
            'Vehicle Name',
            'Customer Name',
            'Plate Number',
            'RPT Status',
            'Battery Status',
            'Check Date'
        ];
    }

    // Map the data to the appropriate columns in the Excel file
    public function map($checklist): array
    {
        return [
            $checklist->user ? $checklist->user->name : 'N/A',
            $checklist->vehicle ? $checklist->vehicle->vehicle_name : 'N/A',
            $checklist->customer ? $checklist->customer->customername : 'N/A',
            $checklist->plate_number,
            $checklist->rbt_status,
            $checklist->batt_status,
            $checklist->check_date
        ];
    }
}

