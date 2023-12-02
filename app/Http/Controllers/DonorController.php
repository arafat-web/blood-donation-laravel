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
            if ($request->btn == 1) {
                return back()->with('message', 'Your Information has been sent to Admin panel. Please remember your email an phone number!!');
            }

            return back()->with('message', 'Donor added successfully!');
        } else {
            return back()->with('message', 'Invalid Input!');
        }

    }

    public function acceptDonor($id)
    {

        $accepted = Donor::where('id', $id)->update(['status' => 1]);

        if ($accepted) {
            return back()->with('message', 'Donor Request Accepted Successfully!');
        } else {
            return back()->with('message', 'Something went wrong!');
        }

    }

    public function deleteRequest($id)
    {
        $deleted = Donor::where('id', $id)->delete();
        if ($deleted) {
            return back()->with('message', 'Data Deleted!');
        }
    }
}
