<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('client.index');
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
