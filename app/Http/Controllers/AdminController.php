<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use App\Models\City;
use App\Models\Donor;
use App\Models\Location;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index()
    {

        $total = Donor::all()->count();
        $active = Donor::where('active_status', 1)->get()->count();
        $inactive = Donor::where('active_status', 0)->get()->count();
        $request = Donor::where('status', 0)->get()->count();

        return view('admin.index', compact('total', 'active', 'inactive', 'request'));

    }

    public function addDonor()
    {
        if (Auth::check()) {
            $bloods = Blood::all();
            $cities = City::orderBy('id', 'DESC')->get();
            $locations = Location::orderBy('id', 'DESC')->get();

            return view('admin.add-donor', compact('bloods', 'cities', 'locations'));
        }

        return redirect('login')->withSuccess('Opps! You do not have access');
    }

    public function donorRequest()
    {
        if (Auth::check()) {
            $donors = Donor::join('bloods', 'donors.blood_group', '=', 'bloods.id')
                ->join('cities', 'donors.city', '=', 'cities.id')
                ->join('locations', 'donors.location', '=', 'locations.id')
                ->select('donors.*', 'bloods.blood_group as blood_group_name', 'cities.city_name as city_name', 'locations.location_name as location_name')
                ->where('status', 0)
                ->orderBy('donors.id', 'DESC')
                ->get();

            return view('admin.donor-request', compact('donors'));
        }

        return redirect('login')->withSuccess('Opps! You do not have access');
    }

    public function donorList()
    {
        if (Auth::check()) {
            // $donors = Donor::join();
            $donors = Donor::join('bloods', 'donors.blood_group', '=', 'bloods.id')
                ->join('cities', 'donors.city', '=', 'cities.id')
                ->join('locations', 'donors.location', '=', 'locations.id')
                ->select('donors.*', 'bloods.blood_group as blood_group_name', 'cities.city_name as city_name', 'locations.location_name as location_name')
                ->where('status', 1)
                ->orderBy('donors.id', 'DESC')
                ->get();

            return view('admin.donor-list', compact('donors'));
        }

        return redirect('login')->withSuccess('Opps! You do not have access');
    }

    public function locationSettings()
    {
        if (Auth::check()) {
            $cities = City::orderBy('id', 'DESC')->get();
            $locations = Location::orderBy('id', 'DESC')->get();

            return view('admin.location-settings', compact('cities', 'locations'));
        }

        return redirect('login')->withSuccess('Opps! You do not have access');
    }

    public function donationSettings()
    {
        if (Auth::check()) {
            $bloods = Blood::all();
            return view('admin.donation-settings', compact('bloods'));
        }

        return redirect('login')->withSuccess('Opps! You do not have access');
    }

    public function addAdmin(){
        // $users = User::all();
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->get();
        
        return view('admin.add-admin', compact('users'));
    }

    public function add(Request $request)
    {
        DB::beginTransaction();
    
        try {
            // Create the user
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
    
            // Check if user creation was successful
            if ($user) {
                // Find the role (assuming you've already created it)
                $role = Role::find(2);
    
                // Assign the role to the user
                $user->assignRole($role);
    
                // Commit the transaction
                DB::commit();
    
                // Redirect with success message
                return redirect()->back()->with('message', 'User added successfully');
            }
        } catch (\Exception $e) {
            // If an exception occurs, rollback the transaction
            DB::rollback();
    
            // Redirect with error message
            return redirect()->back()->with('error', 'Failed to add user');
        }
    }

    public  function destroy($id){

        $user = User::find($id);
        $user->delete();
        return back()->with('message', 'User deleted successfully');
    }
}
