<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\skill;


class skillController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            $skill = skill::all();
        return view('admin/section/skill', [
            
            'skill' => $skill
        ]);
        } else {
            // Redirect the user to the login page or show an error message
            return redirect()->route('login.index')->with('error', 'Please log in to change your password.');
        }
       
    }

    public function add(Request $request)
    {
        $data = $request->validate([

            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $newskill = skill::create($data);

        return redirect(route('skill.index'));
    }

    public function update(Request $request, skill $id)
    {
        $data = $request->validate([

            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $id->update($data);

        return redirect(route('skill.index'));

    }

    public function destroy(Request $request,skill $id)
    {

        $id->delete();
        return redirect(route('skill.index'));
    }
}
