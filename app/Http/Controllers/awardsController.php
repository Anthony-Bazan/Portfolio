<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\skillaward;


class awardsController extends Controller
{
    //

    public function index()
    {
        if (Auth::check()) {
            $award = skillaward::all();
        return view('admin/section/award',
    [
        'award' => $award
    ]);
        } else {
            // Redirect the user to the login page or show an error message
            return redirect()->route('login.index')->with('error', 'Please log in to change your password.');
        }
       
    }

    public function add(Request $request)
    {
        $data = $request->validate([

            'year' => 'required|string',
            'company' => 'required|string'
        ]);

        $addaward = skillaward::create($data);

        return redirect(route('awards.index'));
    }

    public function update(Request $request, skillaward $id)
    {
        $data = $request->validate([

            'year' => 'required|string',
            'company' => 'required|string'
        ]);

       $id->update($data);

        return redirect(route('awards.index'));
    }

    public function destroy(Request $request,skillaward $id)
    {

        $id->delete();
        return redirect(route('awards.index'));
    }
}
