<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Assuming your user model is named User
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful, redirect to a desired location
            
      
            

             // Store the success message in the session
             $request->session()->flash('success', 'Login Sucess!');
            return redirect(route('admin.index'));
        } else {
            // Authentication failed, redirect back with errors
            $request->session('error')->flash('error', 'Login Failed!');
            return redirect()->back();
        }
    }

    public function reg(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.index'); // Change to your desired route after registration
    }

    public function logout()
    {
        Auth::logout(); // Perform logout operation

        // Optionally, you can flash a success message or perform additional actions here
        session()->flash('success', 'Logout Sucess!');
        return redirect()->route('login.index'); // Redirect to the login page after logout
    }
}
