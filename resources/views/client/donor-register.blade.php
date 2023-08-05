@extends('client.layout.app')

@section('title')
    Donor Registration Form
@endsection

@section('content')
    <div class="top-header">
        <div class="top-site-map text-danger">
            <div style="height: 250px;" class="text-center m-0 d-flex flex-column justify-content-center">
                <h2 class="text-white">Register for Donation</h2>
                <p class="text-white"><a class="text-danger" href="{{ route('index') }}">Home </a> <span class="text-danger"><i
                            class="fas fa-long-arrow-alt-right"></i></span> Registration </p>
            </div>
        </div>
    </div>

    <!-- SIGNUP START -->
    <section class="login mt-5">
        <div class="container">
            <!-- SIGNUP MAIN START -->
            <!-- d-flex justify-content-center -->
            <div class="login-main d-flex justify-content-center   p-2">
                <div class="card text-white mb-3">
                    <div style="font-size: 23px;" class="card-header bg-info  text-center">Registration Form</div>
                    <div class="card-body">
                        <form action="profile.html">
                            <h5 class="text-black mb-4">Personal Information</h5>
                            <div class="form-row">
                                <div class="form-group  col-md-6 px-3">
                                    <label for="name">Name <span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" placeholder="Full Name">
                                </div>
                                <div class="form-group col-md-6 px-3">
                                    <label for="email">Email <span class="small text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group  col-md-6 px-3">
                                    <label for="phone">Phone <span class="small text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Enter Phone">
                                </div>
                                <div class="form-group col-md-6 px-3">
                                    <label for="city">City <span class="small text-danger">*</span></label>
                                    <select class="custom-select small" id="city">
                                        <option disabled selected>Select Location</option>
                                        <option value="1">Dhaka</option>
                                        <option value="2">Rajshahi</option>
                                        <option value="3">Chottogram</option>
                                        <option value="4">Barishal</option>
                                        <option value="5">Khulna</option>
                                        <option value="6">Sylhet</option>
                                        <option value="7">Rangpur</option>
                                        <option value="8">Mymensing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 px-3">
                                    <label for="city">Location <span class="small text-danger">*</span></label>
                                    <select class="custom-select small" id="city">
                                        <option disabled selected>Select Location</option>
                                        <option value="1">Dhaka</option>
                                        <option value="2">Rajshahi</option>
                                        <option value="3">Chottogram</option>
                                        <option value="4">Barishal</option>
                                        <option value="5">Khulna</option>
                                        <option value="6">Sylhet</option>
                                        <option value="7">Rangpur</option>
                                        <option value="8">Mymensing</option>
                                    </select>
                                </div>
                                <div class="form-group  col-md-6 px-3">
                                    <label for="address">Address <span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control" id="address" placeholder="Enter Adress">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6 px-3">

                                    <label for="dob">Date of Birth <span class="small text-danger">*</span></label>
                                    <input type="date" id="dob" class="form-control small" />

                                </div>
                                <div class="form-group  col-md-6 px-3">
                                    <label for="gender">Gender <span class="small text-danger">*</span></label>
                                    <select class="custom-select small" id="gender">
                                        <option disabled selected>Select Donor Type</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                            </div>
                            <a href="profile.html"> <button type="submit"
                                    class="btn w-100 mt-4 btn-info">Submit</button></a>
                        </form>
                    </div>
                </div>
            </div>
            <!-- SIGNUP MAIN END -->
        </div>
    </section>
    <!-- SIGNUP END -->
@endsection
