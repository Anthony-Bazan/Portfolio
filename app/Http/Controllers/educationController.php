<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\edudescription;
use App\Models\education;


class educationController extends Controller
{
    //

    public function index()
    {
        if (Auth::check()) {
            $description = edudescription::all();
            $education = education::all();
            return view('admin/section/education', ([
    
                'description' => $description,
                'education' =>$education
            ]));
        } else {
            // Redirect the user to the login page or show an error message
            return redirect()->route('login.index')->with('error', 'Please log in to change your password.');
        }
        
    }

    public function description(Request $request, edudescription $id)
    {
        $data  = $request->validate([

           
            'description' => 'required|string'
        ]);

        $id->update($data);

        return redirect(route('education.index'));
    }

    public function update(Request $request, education $id)
    {
        $data = $request->validate([

            'edulevel' => 'required|string',
            'school' => 'required|string',
            'start' => 'required|string',
            'end' =>  'required|string'
        ]);

        $id->update($data);
        return redirect(route('education.index'));
    }

    public function add(Request $request)
    {
        $data = $request->validate([

            'edulevel' => 'required|string',
            'school' => 'required|string',
            'start' => 'required|string',
            'end' =>  'required|string'
        ]);

        $neweducation = education::create($data);
        
        return redirect(route('education.index'));
    }

    public function destroy(Request $request,education $id)
    {

        $id->delete();
        return redirect(route('education.index'));
    }
}
