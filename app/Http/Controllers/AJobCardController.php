<?php

namespace App\Http\Controllers;

use App\Models\JobCard;
use Illuminate\Http\Request;

class AJobCardController extends Controller
{

    public function index()
    {
        $jobcards = JobCard::with(['customer', 'user'])->get();
        // $jobcards = JobCard::all();
        return view('Ajobcards.index', compact('jobcards'));
    }

    public function approve($id)
    {
        $jobcard = JobCard::findOrFail($id);
        return view('Ajobcards.approve', compact('jobcard'));
    }

    public function update(Request $request, $id)
    {     $request->validate([
        'share_email' => 'required|email',
        // Other validations...
    ]);
        $jobcard = JobCard::findOrFail($id);
        $jobcard->status = $request->input('status');
        $jobcard->save();

         // Send email logic (using Laravel's Mail facade)

        return redirect()->route('Ajobcards.index')->with('success', 'Job card updated successfully.');
    }


}
