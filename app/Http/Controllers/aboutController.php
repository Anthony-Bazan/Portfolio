<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\about;
use App\Models\awardlist;


class aboutController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            $about = about::all();
            $award = awardlist::all();
            return view('admin/section/about', [
    
                'about' => $about,
                'award' => $award
            ]);
        } else {
            // Redirect the user to the login page or show an error message
            return redirect()->route('login.index')->with('error', 'Please log in to change your password.');
        }
       
    }

    public function update(Request $request, about $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'role' => 'required|string',
            'location' => 'required|string',
            'description' => 'required|string',
        ]);

        $id->update($data);

        return redirect(route('about.index'));
    }

    public function add(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        $newabout = awardlist::create($data);
        return redirect(route('about.index'));
    }

    public function updates(Request $request, awardlist $id)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $id->update($data);

        return redirect(route('about.index'));
    }

    public function destroy(Request $request,awardlist $id)
    {

        $id->delete();
        return redirect(route('about.index'));
    }
}
