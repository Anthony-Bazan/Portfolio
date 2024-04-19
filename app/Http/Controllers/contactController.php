<?php

namespace App\Http\Controllers;
use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    //

    public function index()
    {
        $contact =contact::all();
        return view('admin/section/contact',
    [
        'contact' => $contact
    ]);
    }

    public function update(Request $request, contact $id)
    {

        $data = $request->validate([

            'email' => 'required|string',
            'phone' => 'required|string',
            'location' => 'required|string',
        ]);

        $id->update($data);
        return redirect(route('contact.index'));
    }
}
