<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\home;


class adminController extends Controller
{
    //

    public function index()
    {
        if (Auth::check()) {
            $home = home::all();

        return view('admin/index', [
            'home' =>$home
        ]);
        } else {
            // Redirect the user to the login page or show an error message
            return redirect()->route('login.index')->with('error', 'Please log in to change your password.');
        }
        
    }

    public function update(Request $request, home $id)
    {
        $data = $request->validate([
            'name' =>'required|string',
            'role' => 'required|string',
            'description' => 'required|string'
        ]);

        $id->update($data);

        return redirect(route('admin.index'));
    }

   
}
