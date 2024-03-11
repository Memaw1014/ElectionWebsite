<?php

namespace App\Http\Controllers;
use App\Models\members_model;
use App\Models\table_model;


use Illuminate\Http\Request;

class view_controller extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function login()
    {
        return view('login');
    }
    public function admin()
    {
        return view('admin_register');
    }

    public function index()
    {
       
        return view('form');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'barangay' => 'required',
            'sitio' => 'required',
            'precint#' => 'required',
            'sitio_leader' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'nickname'=> 'required',
            'age' => 'required',
            'fb_account' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'occupation' => 'required',
            'voted_on_2023' => 'array', // Assuming 'Voted_on_2023' is an array
            'organization' => 'array', // Assuming 'Organization' is an array
            'beneficiary' => 'array', // Assuming 'Beneficiary' is an array
        ]);

        // You can store the form data in the database
        members_model::create($data);

        return redirect()->route('route'); // Replace 'your-route-name' with the desired route
    }
    public function table()
        {
            $members = table_model::all();
            return view('table', ['members' => $members]);
        }
    public function search()
    {
        $members = table_model::all();
        return view('table', compact('members'));
    }

    public function searchbox(Request $request)
    {
        $contact = $request->input('contact');
        $barangay = $request->input('barangay');
        $organization = $request->input('organization');

        $query = table_model::query();

        if ($contact) {
            $query->where('contact', 'like', "%$contact%");
        }

        if ($barangay) {
            $query->where('barangay', 'like', "%$barangay%");
        }
        if($organization){
            $query->where('organization','like', "%$organization%");
        }

        $members = $query->get();

        return view('table', compact('members'));
    }
    public function delete($id)
    {
        $member = members_model::find($id);

        if ($member) {
            $member->delete();
            // You can redirect back to the members list or any other page after deletion.
            return redirect()->route('table')->with('success', 'Member deleted successfully.');
        }

        // Handle the case where the member with the given ID is not found.
        return redirect()->route('table')->with('error', 'Member not found.');
    }

}
