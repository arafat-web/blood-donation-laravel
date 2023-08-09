<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function addDonor()
    {
        return view('admin.add-donor');
    }
    public function donorRequest()
    {
        return view('admin.donor-request');
    }
    public function donorList(){
        return view('admin.donor-list');
    }
}
