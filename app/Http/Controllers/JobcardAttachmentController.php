<?php

namespace App\Http\Controllers;

use App\Models\JobcardAttachment;
use Illuminate\Http\Request;

class JobcardAttachmentController extends Controller
{
    // Display a listing of the attachments
    public function index()
    {
        $attachments = JobcardAttachment::all();
        return view('jobcard_attachments.index', compact('attachments'));
    }

    // Show the form for creating a new attachment
    public function create()
    {
        return view('jobcard_attachments.create');
    }


    // Store a new attachment in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'preattachment_picture' => 'nullable|image',
            'postattachment_picture' => 'nullable|image',
            'car_plateEvidence_picture' => 'nullable|image',
            'tempering_picture' => 'nullable|image',
        ]);

        // Handle file uploads
        foreach ($validated as $key => $file) {
            if ($file) {
                $validated[$key] = $file->store('attachments', 'public');
            }
        }

        JobcardAttachment::create($validated);

        return redirect()->route('jobcard_attachments.index')->with('success', 'Attachment created successfully!');
    }

    // Display a specific attachment
    public function show($id)
    {
        $attachment = JobcardAttachment::findOrFail($id);
        return view('jobcard_attachments.show', compact('attachment'));
    }

    // Show the form for editing an attachment
    public function edit($id)
    {
        $attachment = JobcardAttachment::findOrFail($id);
        return view('jobcard_attachments.edit', compact('attachment'));
    }

    // Update an attachment in the database
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'preattachment_picture' => 'nullable|image',
            'postattachment_picture' => 'nullable|image',
            'car_plateEvidence_picture' => 'nullable|image',
            'tempering_picture' => 'nullable|image',
        ]);

        $attachment = JobcardAttachment::findOrFail($id);

        // Handle file uploads
        foreach ($validated as $key => $file) {
            if ($file) {
                $validated[$key] = $file->store('attachments', 'public');
            }
        }

        $attachment->update($validated);

        return redirect()->route('jobcard_attachments.index')->with('success', 'Attachment updated successfully!');
    }

    // Remove an attachment from the database
    public function destroy($id)
    {
        $attachment = JobcardAttachment::findOrFail($id);
        $attachment->delete();

        return redirect()->route('jobcard_attachments.index')->with('success', 'Attachment deleted successfully!');
    }
}
