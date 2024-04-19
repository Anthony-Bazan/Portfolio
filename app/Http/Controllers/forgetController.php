<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Assuming your user model is named User
use RealRashid\SweetAlert\Facades\Alert;

class forgetController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            return view('admin login.change-pass');
        } else {
            // Redirect the user to the login page or show an error message
            return redirect()->route('login.index')->with('error', 'Please log in to change your password.');
        }
        return view('admin login.change-pass');
    }

   

public function auth(Request $request)
{
    $request->validate([
        'email' => 'required|email',
    ]);

    $credentials = $request->only('email');

    // Custom authentication logic to check if a user with the provided email exists
    $user = User::where('email', $credentials['email'])->first();
    if ($user) {
        Auth::login($user);
        $request->session()->flash('alert', ['type' => 'success', 'message' => 'Account Found Please Enter New password']);
        return redirect()->route('forget.index');
    } else {
        $request->session()->flash('alert', ['type' => 'error', 'message' => 'Account Not Found']);
        return redirect()->back();
    }
}






public function savepass(Request $request)
    {
        $request->validate([
            'pass1' => 'required|min:8', // Add any validation rules as needed
            'pass2' => 'required|same:pass1',
        ]);
    
        // Check if the user is authenticated
        if (Auth::check()) {
            $user = Auth::User();
            $user->password = bcrypt($request->input('pass1'));
            $user->save();
            $request->session()->flash('alert', ['type' => 'success', 'message' => 'New password save Successful!']);
            return redirect()->route('login.index');
        } else {
            // Handle the case where the user is not authenticated
            // Redirect the user to the login page or show an error message
            $request->session()->flash('alert', ['type' => 'error', 'message' => 'Confirm Password Doesnt match.']);
            return redirect()->route('changepass.index')->with('error', 'User is not authenticated!');
        }
    }

}
