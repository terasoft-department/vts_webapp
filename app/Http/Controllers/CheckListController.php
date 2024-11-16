<?php

namespace App\Http\Controllers;

use App\Exports\ChecklistsExport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\CheckList;
use Maatwebsite\Excel\Facades\Excel;
// use PhpOffice\PhpSpreadsheet\Writer\Pdf;

class CheckListController extends Controller
{
    public function index()
    {
        $check_lists = CheckList::with('user')->get();
        // Return the view without search results
        return view('checklists.index', compact('check_lists'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search checklists by vehicle name, category, or plate number
        $results = CheckList::where('vehicle_id', 'like', "%{$query}%")
            ->orWhere('user_id', 'like', "%{$query}%")
            ->orWhere('plate_number', 'like', "%{$query}%")
            ->get();

        // Return the search results to the view
        return view('checklists.index', compact('results'));
    }
    public function exportPDF(Request $request)
    {
        $results = // Fetch checklists based on the request filters, similar to search logic
        $pdf = Pdf::loadView('pdf.checklist', compact('results'));
        return $pdf->download('checklist.pdf');
    }

    public function exportExcel(Request $request)
    {
        return Excel::download(new ChecklistsExport($request), 'checklist.xlsx');
    }
    // public function generatePdf(Request $request)
    // {
    //     $results = $this->searchResults($request); // Get results from your search query or logic

    //     $pdf = PDF::loadView('checklist_pdf', compact('results')); // Render PDF view
    //     return $pdf->download('checklist_report.pdf'); // Download the generated PDF
    // }
}
