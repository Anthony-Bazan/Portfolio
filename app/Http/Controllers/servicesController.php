<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\service;

class servicesController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            $service = service::all();
        return view('admin/section/service', [

            'service' => $service
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
            'description' => 'required|string'
        ]);

        $addservice = service::create($data);

        return redirect(route('services.index'));
    }

    public function update(Request $request, service $id)
    {
        $data = $request->validate([

            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        $id->update($data);

        return redirect(route('services.index'));

    }

    public function destroy(Request $request,service $id)
    {

        $id->delete();
        return redirect(route('services.index'));
    }
}