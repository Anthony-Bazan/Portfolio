<?php

namespace App\Http\Controllers;
use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class clientController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            $client =client::all();
        return view('admin/section/client', [

            'client' => $client
        ]);
        } else {
            // Redirect the user to the login page or show an error message
            return redirect()->route('login.index')->with('error', 'Please log in to change your password.');
        }
        
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',   
            'role'=> 'required|string',
            'description'=> 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
        ]);

        // Handle file upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload'), $imageName);
        $data['image'] = $imageName;
    }

    // Create new work instance and save to database
    $client = client::create($data);

            

            // Store the success message in the session
            $request->session()->flash('success', 'Testimonial successfully Added!');

            // Redirect to the index page
            return redirect(route('client.index'));
    }

    public function update(Request $request, client $id)
    {
        $data = $request->validate([
            'name' => 'required|string',   
            'role'=> 'required|string',
            'description'=> 'required|string',
            
        ]);

        $id->update($data);

        

         // Store the success message in the session
         $request->session()->flash('success', 'Testimonial successfully Updated!');

         // Redirect to the index page
         return redirect(route('client.index'));
    }

    public function destroy(Request $request,client $id)
    {

        $id->delete();
        return redirect(route('client.index'));
    }
}
