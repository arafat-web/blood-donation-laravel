<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use App\Models\City;
use App\Models\Donor;
use App\Models\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $donors = Donor::join('bloods', 'donors.blood_group', '=', 'bloods.id')
        ->join('cities', 'donors.city', '=', 'cities.id')
        ->join('locations', 'donors.location', '=', 'locations.id')
        ->select('donors.*', 'donors.id as donor_id', 'bloods.blood_group as blood_group_name', 'cities.city_name as city_name', 'locations.location_name as location_name')
        ->where('status', 1)
        ->orderBy('donors.id', 'DESC')
        ->limit(8)
        ->get();
        $group_count = Blood::all()->count();
        $location_count = Location::all()->count();
        $donor_count = Donor::all()->count();
        $groups = Blood::orderBy('id', 'desc')->get();
        $cities = City::orderBy('id', 'DESC')->get();
        $locations = Location::orderBy('id', 'DESC')->get();
        return view('client.index', compact('groups', 'cities', 'locations', 'group_count', 'donor_count', 'location_count', 'donors'));
    }
    public function contact()
    {
        return view('client.contact');
    }

    public function donateNow()
    {
        return view('client.donate-now');
    }

    public function donorRegister()
    {
        $bloods = Blood::all();
        $cities = City::orderBy('id', 'DESC')->get();
        $locations = Location::orderBy('id', 'DESC')->get();
        return view('client.donor-register', compact('bloods', 'cities', 'locations'));
    }
    public function searchDonor(Request $request)
    {

        $request->validate([
            'blood_group' => 'required',
            'city' => 'required',
            'location' => 'required',
            'gender' => 'required'
        ]);

        $group = $request->blood_group;
        $city = $request->city;
        $location = $request->location;
        $gender = $request->gender;

        $formData = $request->all();

        $results = Donor::join('bloods', 'donors.blood_group', '=', 'bloods.id')
            ->join('cities', 'donors.city', '=', 'cities.id')
            ->join('locations', 'donors.location', '=', 'locations.id')
            ->select('donors.*', 'donors.id as donor_id', 'bloods.blood_group as blood_group_name', 'cities.city_name as city_name', 'locations.location_name as location_name')
            ->where('status', 1)
            ->where('active_status', 1)
            ->where('donors.blood_group', $group)
            ->where('donors.city', $city)
            ->where('donors.location', $location)
            ->where('donors.gender', $gender)
            ->orderBy('donors.id', 'DESC')
            ->get();

        $bloods = Blood::all();
        $cities = City::orderBy('id', 'DESC')->get();
        $locations = Location::orderBy('id', 'DESC')->get();

        return view('client.search-donors', compact('results', 'bloods', 'cities', 'locations', 'formData'));
        // return $formData;
    }

    public function donorProfile($id)
    {

        $views = Donor::where('id', $id)->first();
        Donor::where('id', $id)->update(['profile_views' => $views->profile_views+1]);
        
        $result = Donor::join('bloods', 'donors.blood_group', '=', 'bloods.id')
            ->join('cities', 'donors.city', '=', 'cities.id')
            ->join('locations', 'donors.location', '=', 'locations.id')
            ->select('donors.*', 'donors.id as donor_id', 'bloods.blood_group as blood_group_name', 'cities.city_name as city_name', 'locations.location_name as location_name')
            ->where('status', 1)
            ->where('active_status', 1)
            ->where('donors.id', $id)
            ->orderBy('donors.id', 'DESC')
            ->first();
        return view('client.donor-profile', compact('result'));
    }
}