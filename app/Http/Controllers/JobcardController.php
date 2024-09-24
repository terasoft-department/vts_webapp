<?php

namespace App\Http\Controllers;

use App\Models\JobCard;
use Illuminate\Http\Request;

class JobcardController extends Controller
{
    public function index()
    {
        $jobcards = JobCard::all();
        return view('jobcards.index', compact('jobcards'));
    }

    public function approve($id)
    {
        $jobcard = JobCard::findOrFail($id);
        return view('jobcards.approve', compact('jobcard'));
    }

    public function update(Request $request, $id)
    {
        $jobcard = JobCard::findOrFail($id);
        $jobcard->status = $request->input('status');
        $jobcard->save();

        return redirect()->route('jobcards.index')->with('success', 'Job card updated successfully.');
    }

}
