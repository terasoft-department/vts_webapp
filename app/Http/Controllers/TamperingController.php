<?php

namespace App\Http\Controllers;

use App\Models\JobCard;
use Illuminate\Http\Request;

class TamperingController extends Controller
{

    public function index()
    {
        $jobcards = JobCard::all();
        $jobcards = JobCard::paginate(10);
        return view('tampering.index', compact('jobcards'));
    }

    public function approve($id)
    {
        $jobcard = JobCard::findOrFail($id);
        return view('tampering.approve', compact('jobcard'));
    }

    public function update(Request $request, $id)
    {     $request->validate([
        'share_email' => 'required|email',
        // Other validations...
    ]);
        $jobcard = JobCard::findOrFail($id);
        $jobcard->status = $request->input('status');
        $jobcard->save();

        return redirect()->route('tampering.index')->with('success', 'Job card updated successfully.');
    }

}
