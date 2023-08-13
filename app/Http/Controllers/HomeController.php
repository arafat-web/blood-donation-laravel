<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $groups = Blood::orderBy('id', 'desc')->get();
        return view('client.index', compact('groups'));
    }
    public function contact(){
        return view('client.contact');
    }

    public function donateNow(){
        return view('client.donate-now');
    }

    public function donorRegister(){
        return view('client.donor-register');
    }
    public function searchDonor(){
        return view('client.search-donors');
    }

    public function donorProfile(){
        return view('client.donor-profile');
    }
}
