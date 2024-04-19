<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\social;
use RealRashid\SweetAlert\Facades\Alert; // Import the SweetAlert facade
class socialController extends Controller
{
    //

    public function index()
    {
       
        $social = social::all();
        return view('admin.section.socials',[
            'social' =>$social,
           
        ]);
    }

    public function site($site,$link)
    {
        return redirect("https://{$site}/{$link}");
    }

   
    public function add(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'icon' => 'required|string',
            'site' => 'required|string',
            'link' => 'required|string'
        ]);

        $addsocial = social::create($data);

         // Store the success message in the session
         $request->session()->flash('success', 'Social Media added successfully!');
        return redirect(route('social.index'));
    }

    public function update(Request $request, social $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'icon' => 'required|string',
            'site' => 'required|string',
            'link' => 'required|string'
        ]);

        $id->update($data);

         // Store the success message in the session
         $request->session()->flash('success', 'Social Media successfully Edited!');
        return redirect(route('social.index'));
    }


    public function Destroy( social $id)
    {
        $id->delete();
        return redirect(route('social.index'));

    }
}
