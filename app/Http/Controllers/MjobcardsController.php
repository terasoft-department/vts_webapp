<?php

namespace App\Http\Controllers;

use App\Models\JobCard;
use Illuminate\Http\Request;

class MjobcardsController extends Controller
{

    public function index()
    {
        $jobcards = JobCard::all();
        return view('jobcards2.index', compact('jobcards'));
    }

    public function approve($id)
    {
        $jobcard = JobCard::findOrFail($id);
        return view('jobcards2.approve', compact('jobcard'));
    }

    public function update(Request $request, $id)
    {     $request->validate([
        'share_email' => 'required|email',
        // Other validations...
    ]);
        $jobcard = JobCard::findOrFail($id);
        $jobcard->status = $request->input('status');
        $jobcard->save();

        return redirect()->route('jobcards2.index')->with('success', 'Job card updated successfully.');
    }

}
