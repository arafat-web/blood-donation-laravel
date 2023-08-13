<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Location;
use Illuminate\Http\Request;

class CityLocationController extends Controller
{
    public function addCity(Request $request)
    {
        City::create($request->all());
        return back()->with('message', 'City Name Added!');
    }

    public function addLocation(Request $request)
    {
        Location::create($request->all());
        return back()->with('message', 'Location Name Added!');
    }
}
