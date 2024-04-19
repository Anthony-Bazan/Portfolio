<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\experience;

class experienceController extends Controller
{
    //
    
    public function index()
    {
        if (Auth::check()) {
            $experience = experience::all();
            return view('admin/section/experience',([
    
                'experience' =>$experience
            ]));
        } else {
            // Redirect the user to the login page or show an error message
            return redirect()->route('login.index')->with('error', 'Please log in to change your password.');
        }
       
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            
            'role' => 'required|string',
            'company' => 'required|string',
            'year'=> 'required|string',
            'service'=> 'required|string',
            'description' => 'required|string'
        ]);

        $addexperience = experience::create($data);

        return redirect(route('experience.index'));
    }

    public function update(Request $request, experience $id)
    {
        $data = $request->validate([
            
            'role' => 'required|string',
            'company' => 'required|string',
            'year'=> 'required|string',
            'service'=> 'required|string',
            'description' => 'required|string'
        ]);

       $id->update($data);

        return redirect(route('experience.index'));
    }
}