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

            @if (session()->has('message'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Content Row -->


            <!-- SIGNUP MAIN START -->
            <!-- d-flex justify-content-center -->
            <div class="login-main d-flex justify-content-center   p-2">
                <div class="card text-white mb-3">
                    <div style="font-size: 23px;" class="card-header bg-info  text-center">Registration Form</div>
                    <div class="card-body">
                        <form action="{{ route('add.new.donor') }}" method="POST">
                            @csrf
                            <h5 class="text-black mb-4">Personal Information</h5>
                            <div class="form-row">
                                <div class="form-group  col-md-6 px-3">
                                    <label for="name">Name <span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control" name="fullname" placeholder="Full Name">
                                </div>
                                <div class="form-group  col-md-6 px-3">
                                    <label for="phone">Phone <span class="small text-danger">*</span></label>
                                    <input type="tel" class="form-control" name="phone" placeholder="Enter Phone">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 px-3">
                                    <label for="email">Email <span class="small text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                </div>
                                <div class="form-group col-md-6 px-3">
                                    <label for="blood_group">Blood Group <span class="small text-danger">*</span></label>
                                    <select class="custom-select small" name="blood_group">
                                        <option disabled selected>Select Blood Group</option>
                                        @foreach ($bloods as $blood)
                                            <option value="{{ $blood->id }}">{{ $blood->blood_group }}</option>
                                        @endforeach
                                    </select>
                                </div>


                            </div>
                            <div class="form-row">
                                <div class="form-group  col-md-6 px-3">
                                    <label for="gender">Gender <span class="small text-danger">*</span></label>
                                    <select class="custom-select small" name="gender">
                                        <option disabled selected>Select Donor Type</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>

                                <div class="form-group  col-md-6 px-3">
                                    <label for="profession">Profession <span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control" name="profession" placeholder="Enter Adress">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6 px-3">
                                    <label for="dob">Date of Birth <span class="small text-danger">*</span></label>
                                    <input type="date" name="date_of_birth" class="form-control small" />
                                </div>

                                <div class="form-group col-md-6 px-3">
                                    <label for="city">City <span class="small text-danger">*</span></label>
                                    <select class="custom-select small" name="city">
                                        <option disabled selected>Select Location</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-6 px-3">
                                    <label for="location">Location <span class="small text-danger">*</span></label>
                                    <select class="custom-select small" name="location">
                                        <option disabled selected>Select Location</option>
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group  col-md-6 px-3">
                                    <label for="address">Address <span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control" name="address" placeholder="Enter Adress">
                                </div>

                                <input type="hidden" name="status" value="0">
                                <input type="hidden" name="active_status" value="1">

                            </div>
                            <button type="submit" name="btn" value="1"
                                class="btn w-100 mt-4 btn-info">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- SIGNUP MAIN END -->
        </div>
    </section>
    <!-- SIGNUP END -->
@endsection
