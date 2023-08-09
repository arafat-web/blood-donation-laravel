<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use Illuminate\Http\Request;

class BloodController extends Controller
{
    //
    public function add(Request $request)
    {
        Blood::create($request->all());
        return back()->with('message', 'Blood Group Added!');

    }
}