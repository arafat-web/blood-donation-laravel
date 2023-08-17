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
                        <form action="{{ route('add.new.donor') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" class="font-weight-bolder"
                                            for="fullname">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Your FullName"
                                            name="fullname" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" for="phone">Phone <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" placeholder="Enter Your Phone"
                                            name="phone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" for="">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" placeholder="Enter Your Email"
                                            name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" for="">Blood Group <span class="text-danger">*</span></label>
                                        <select name="blood_group" class="form-control" required>
                                            <option disabled selected>Select Blood Group</option>
                                            @foreach ($bloods as $blood)
                                                <option value="{{ $blood->id }}">{{ $blood->blood_group }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" for="">Gender <span class="text-danger">*</span></label>
                                        <select class="form-control" name="gender" id="" required>
                                            <option selected disabled>Select a Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" for="">Profession <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Your Profession"
                                            name="profession" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" for="">Date of Birth <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" name="date_of_birth" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" for="">City <span class="text-danger">*</span></label>
                                        <select name="city" class="form-control" required>
                                            <option disabled selected>Select City</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" for="">Location <span class="text-danger">*</span></label>
                                        <select name="location" class="form-control" required>
                                            <option disabled selected>Select Location</option>
                                            @foreach ($locations as $location)
                                                <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bolder" for="">Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter Your Address"
                                            name="address" required>
                                    </div>
                                </div>

                                <input type="hidden" name="active_status" value="1">
                                <input type="hidden" name="status" value="1">
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
