@extends('admin.layout.app')
@section('title')
    Add New Donor
@endsection

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add New Donor</h1>
        </div>

        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-danger">Add Donor</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" class="font-weight-bolder"
                                            for="">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Your FullName" name="donor_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" for="">Phone</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Phone" name="donor_phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" for="">Email</label>
                                        <input type="email" class="form-control" placeholder="Enter Your Email" name="donor_email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" for="">Blood Group</label>
                                        <select name="donor_blood_group" class="form-control">
                                            <option disabled selected>Select Blood Group</option>
                                            @foreach ($bloods as $blood)
                                                <option value="{{ $blood->id }}">{{ $blood->blood_group }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" for="">Gender</label>
                                        <select class="form-control" name="donor_gender" id="">
                                            <option selected disabled>Select a Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" for="">Date of Birth</label>
                                        <input type="date" class="form-control" name="donor_dob">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" for="">City</label>
                                        <select name="donor_city" class="form-control">
                                            <option disabled selected>Select City</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" for="">Location</label>
                                        <select name="donor_location" class="form-control">
                                            <option disabled selected>Select Location</option>
                                            @foreach ($locations as $location)
                                                <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" for="">Address</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Address" name="donor_address">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-warning">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
@endsection
