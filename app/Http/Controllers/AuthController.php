<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showregister()
    {
        return view('auth.register');
    }

      public function admnDashboard()
    {
        return view('admin.index');
    }

   public function user()
{
    try {
        $users = User::all();
        return view('users.index', compact('users'));
    } catch (\Exception $e) {
        return redirect()->route('users.index')->withErrors('Failed to retrieve users.');
    }
}
// In AuthController.php

public function edit($user_id)
{
    $user = User::where('user_id', $user_id)->firstOrFail();
    return view('users.edit', compact('user'));
}

public function update(Request $request, $user_id)
{
    try {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user_id . ',user_id',
            'password' => 'nullable|string|min:8',
            'role' => 'required|string|in:project_manager,monitoring_officer,admin,accounting_officer,technician',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::where('user_id', $user_id)->firstOrFail();
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->role = $request->role;
        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'An error occurred during update.');
    }
}



public function destroy($user_id)
{
    try {
        $user = User::findOrFail($user_id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    } catch (\Exception $e) {
        return redirect()->route('users.index')->with('error', 'An error occurred during deletion.');
    }
}
public function toggleStatus($id)
{
    $user = User::findOrFail($id);
    // $user->is_active = !$user->is_active; // Toggle the status
    $user->status = ($user->status === 'is_active') ? 'inactive' : 'is_active';
    $user->save();

    return redirect()->back()->with('success', 'User status updated successfully!');
}


   public function register(Request $request)
{
    try {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|string|in:project_manager,monitoring_officer,admin,accounting_officer,technician',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,

        ]);

        return redirect()->route('users.index')->with('success', 'User registered successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'An error occurred during registration.');
    }
}


public function login(Request $request)
{
    try {
        // Validate email and password input
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Attempt to find the user by email
        $user = User::where('email', $request->email)->first();

        // Check if the user exists and if their status is 'is_active'
        if ($user && $user->status !== 'is_active') {
            return redirect()->back()->withErrors(['email' => 'Your account is inactive. Please contact the admin.']);
        }

        // Attempt to authenticate the user
        if (!Auth::attempt($request->only('email', 'password'))) {
            Log::info('Failed login attempt for email: ' . $request->email);
            return redirect()->back()->with('error', 'Unauthorized! Invalid email or password');
        }

        $user = Auth::user(); // Get the authenticated user

        // Log the user ID and role for debugging
        Log::info('Authenticated user ID: ' . $user->id);
        Log::info('Authenticated user role: ' . $user->role);

        // Redirect based on user role
        switch ($user->role) {
            case 'project_manager':
                return redirect()->route('project_manager.index')->with('success', 'Login successful');
            case 'monitoring_officer':
                return redirect()->route('monitoring_officer.index')->with('success', 'Login successful');
            case 'admin':
                return redirect()->route('admin.index')->with('success', 'Login successful');
            case 'accounting_officer':
                return redirect()->route('accounting_officer.index')->with('success', 'Login successful');
            default:
                return redirect()->route('login')->with('error', 'Role not recognized');
        }
    } catch (\Exception $e) {
        Log::error('Login error: ' . $e->getMessage());
        return redirect()->back()->with('error', 'An error occurred during login.');
    }
}



    public function logout(Request $request)
    {
        try {
            // Check if the user is authenticated
            if ($request->user()) {
                // Get the current access token
                $token = $request->user()->currentAccessToken();

                // Check if the token exists
                if ($token) {
                    $token->delete(); // Delete the token
                }
            }

            // Redirect to login with success message
            return redirect()->route('login')->with('success', 'Successfully logged out');
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            Log::error('Logout error: ' . $e->getMessage());

            // Redirect back with error message
            return redirect()->back()->with('error', 'An error occurred during logout.');
        }
    }



    // Show the password reset form
    public function showResetForm()
    {
        return view('auth.reset-password');
    }

    // Handle the password reset
    public function reset(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the user by email
        $user = User::where('email', $request->input('email'))->first();

        if (!$user) {
            return redirect()->back()->with('error', 'No user found with that email address.');
        }

        // Update the user's password
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->route('login')->with('success', 'Password reset successfully.');
    }

}
