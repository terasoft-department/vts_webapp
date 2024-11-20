<?php

namespace App\Http\Controllers;

use App\Models\NewInstallation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminInstallationController extends Controller
{

     /**
     * Display a listing of the installations.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::all(); // Or a query to fetch specific users
        // Get all installations with the associated user data
        $installations = NewInstallation::all();
        // $installations = NewInstallation::with('user')->get();
        $query = $request->input('search');

    // Filter installations by customer name or any other column
    $installations = NewInstallation::when($query, function ($queryBuilder) use ($query) {
        $queryBuilder->where('customerName', 'like', '%' . $query . '%');
    })->get();

        return view('new_installations3.index', compact('installations','users'));
    }

    /**
     * Show the form for creating a new installation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Fetch all users for the user_id field
        $users = User::all();
        return view('new_installations3.create', compact('users'));
    }

    /**
     * Store a newly created installation in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customerName' => 'nullable|string|max:255',
            'DeviceNumber' => 'nullable|string|max:255',
            'CarRegNumber' => 'nullable|string|max:255',
            'customerPhone' => 'nullable|string|max:255',
            'simCardNumber' => 'nullable|string|max:255',
            'user_id' => 'nullable|exists:users,id',
        ]);

        // Create a new installation record
        NewInstallation::create($request->all());

        return redirect()->route('new_installations3.index')->with('success', 'Installation created successfully');
    }

    /**
     * Display the specified installation.
     *
     * @param \App\Models\NewInstallation $newInstallation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{
    $installation = NewInstallation::find($id); // Assuming you're fetching the installation by ID
    return view('new_installations3.show', compact('installation'));
}


    /**
     * Show the form for editing the specified installation.
     *
     * @param \App\Models\NewInstallation $newInstallation
     * @return \Illuminate\Http\Response
     */
    public function edit(NewInstallation $newInstallation)
    {
        // Fetch all users for the user_id field
        $users = User::all();
        return view('new_installations3.edit', compact('newInstallation', 'users'));
    }

    /**
     * Update the specified installation in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\NewInstallation $newInstallation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewInstallation $newInstallation)
    {
        $request->validate([
            'customerName' => 'nullable|string|max:255',
            'DeviceNumber' => 'nullable|string|max:255',
            'CarRegNumber' => 'nullable|string|max:255',
            'customerPhone' => 'nullable|string|max:255',
            'simCardNumber' => 'nullable|string|max:255',
            'user_id' => 'nullable|exists:users,id',
        ]);

        // Update the existing installation record
        $newInstallation->update($request->all());

        return redirect()->route('new_installations3.index')->with('success', 'Installation updated successfully');
    }

    /**
     * Remove the specified installation from storage.
     *
     * @param \App\Models\NewInstallation $newInstallation
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewInstallation $newInstallation)
    {
        // Delete the installation record
        $newInstallation->delete();

        return redirect()->route('new_installations3.index')->with('success', 'Installation deleted successfully');
    }
}
