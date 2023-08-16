<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function addDonor(Request $request)
    {

        $request->validate([
            'fullname' => 'required',
            'phone' => 'required|unique:donors,phone',
            'email' => 'required|unique:donors,email',
            'blood_group' => 'required',
            'gender' => 'required',
            'profession' => 'required',
            'date_of_birth' => 'required',
            'city' => 'required',
            'location' => 'required',
            'address' => 'required',



        ]);

        $donor = Donor::create($request->all());
        if ($donor) {
            return back()->with('message', 'Donor added successfully!');
        } else {
            return back()->with('message', 'Invalid Input!');
        }

    }
}
