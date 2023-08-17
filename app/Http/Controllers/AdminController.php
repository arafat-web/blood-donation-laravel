<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use App\Models\City;
use App\Models\Donor;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $total = Donor::all()->count();
            $active = Donor::where('active_status', 1)->get()->count();
            $inactive = Donor::where('active_status', 0)->get()->count();
            $request = Donor::where('status', 0)->get()->count();

            return view('admin.index', compact('total', 'active', 'inactive', 'request'));
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function addDonor()
    {
        if (Auth::check()) {
            $bloods = Blood::all();
            $cities = City::orderBy('id', 'DESC')->get();
            $locations = Location::orderBy('id', 'DESC')->get();
            return view('admin.add-donor', compact('bloods', 'cities', 'locations'));
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
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

        return redirect("login")->withSuccess('Opps! You do not have access');
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

        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function locationSettings()
    {
        if (Auth::check()) {
            $cities = City::orderBy('id', 'DESC')->get();
            $locations = Location::orderBy('id', 'DESC')->get();
            return view('admin.location-settings', compact('cities', 'locations'));
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    public function donationSettings()
    {
        if (Auth::check()) {
            $bloods = Blood::all();
            return view('admin.donation-settings', compact('bloods'));
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }
}