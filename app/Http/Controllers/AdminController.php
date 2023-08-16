<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use App\Models\City;
use App\Models\Donor;
use App\Models\Location;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function addDonor()
    {
        $bloods = Blood::all();
        $cities = City::orderBy('id', 'DESC')->get();
        $locations = Location::orderBy('id', 'DESC')->get();
        return view('admin.add-donor', compact('bloods', 'cities', 'locations'));
    }
    public function donorRequest()
    {
        return view('admin.donor-request');
    }
    public function donorList()
    {
        // $donors = Donor::join();
        $donors = Donor::join('bloods', 'donors.blood_group', '=', 'bloods.id')
            ->join('cities', 'donors.city', '=', 'cities.id')
            ->join('locations', 'donors.location', '=', 'locations.id')
            ->select('donors.*', 'bloods.blood_group as blood_group_name', 'cities.city_name as city_name', 'locations.location_name as location_name')
            ->orderBy('donors.id', 'DESC')
            ->get();

        return view('admin.donor-list', compact('donors'));
    }
    public function locationSettings()
    {
        $cities = City::orderBy('id', 'DESC')->get();
        $locations = Location::orderBy('id', 'DESC')->get();
        return view('admin.location-settings', compact('cities', 'locations'));
    }
    public function donationSettings()
    {
        $bloods = Blood::all();
        return view('admin.donation-settings', compact('bloods'));
    }
}
