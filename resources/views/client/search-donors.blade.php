@extends('client.layout.app')

@section('title')
    Search for Donors
@endsection

@section('content')
    <div class="top-header">
        <div class="top-site-map text-danger">
            <div style="height: 250px;" class="text-center m-0 d-flex flex-column justify-content-center">
                <h2 class="text-white">Search Donor</h2>
                <p class="text-white"><a class="text-danger" href="{{ route('index') }}">Home </a> <span class="text-danger"><i
                            class="fas fa-long-arrow-alt-right"></i></span> Search Donors </p>
            </div>
        </div>
    </div>

    <!-- SEARCH START -->
    <section class="search-result mt-5">
        <div class="container">
            <!-- SEARCH CONTROL START -->
            <div class="search-control border bg-white p-4">
                <form class="row" action="{{route('search.donor')}}">
                    <div class="col-lg-2">
                        <div class="form-group mb-3">
                            <label for="bloodgroup" class="small">Blood Group</label>
                            <select class="custom-select small" id="bloodgroup">
                                <option disabled selected>Select One</option>
                                <option value="1">A+</option>
                                <option value="2">A-</option>
                                <option value="3">B+</option>
                                <option value="4">B-</option>
                                <option value="5">AB+</option>
                                <option value="6">AB-</option>
                                <option value="7">O+</option>
                                <option value="8">O-</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group mb-3">
                            <label for="city" class="small">City</label>
                            <select class="custom-select small" id="city">
                                <option disabled selected>Select One</option>
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
                    <div class="col-lg-2">
                        <div class="form-group mb-3">
                            <label for="location" class="small">Location</label>
                            <select class="custom-select small" id="location">
                                <option disabled selected>Select One</option>
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
                    <div class="col-lg-2">
                        <div class="form-group mb-3">
                            <label for="type" class="small">Donor Type</label>
                            <select class="custom-select small" id="type">
                                <option disabled selected>Select One</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group mb-3 ">
                            <label for="date" class="small">Date</label>
                            <input type="date" id="date" class="form-control small" list="location" />
                        </div>
                    </div>
                    <div class="col-lg-2 mt-lg-4 pt-2">
                        <button type="submit" class="btn btn-danger">Search</button>
                    </div>
                </form>
            </div>
            <!-- SEARCH CONTROL END -->

            <!-- SEARCH RESULT START -->
            <div class="search-result">
                <ul class="mt-1 mb-5">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="big mt-4">Search Results:</div>
                        </div>
                    </div>


                    <li class="bg-white border p-4 mt-2">
                        <div class="row">
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Name:
                                </div>
                                <div class="">
                                    Lorem Ipsum
                                </div>
                            </div>
                            <div class="col-lg-3  mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Group:
                                </div>
                                <div class="">
                                    B+
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Location:
                                </div>
                                <div class="">
                                    <span>Dhaka</span>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <button class="btn btn-sm btn-primary ml-2"><a class="text-white" href="profile.html"> View
                                        Profile</a></button>
                            </div>
                        </div>
                    </li>

                    <li class="bg-white border p-4 mt-2">
                        <div class="row">
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Name:
                                </div>
                                <div class="">
                                    Lorem Ipsum
                                </div>
                            </div>
                            <div class="col-lg-3  mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Group:
                                </div>
                                <div class="">
                                    B+
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Location:
                                </div>
                                <div class="">
                                    <span>Dhaka</span>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <button class="btn btn-sm btn-primary ml-2"><a class="text-white" href="profile.html">
                                        View Profile</a></button>
                            </div>
                        </div>
                    </li>

                    <li class="bg-white border p-4 mt-2">
                        <div class="row">
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Name:
                                </div>
                                <div class="">
                                    Lorem Ipsum
                                </div>
                            </div>
                            <div class="col-lg-3  mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Group:
                                </div>
                                <div class="">
                                    B+
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Location:
                                </div>
                                <div class="">
                                    <span>Dhaka</span>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <button class="btn btn-sm btn-primary ml-2"><a class="text-white" href="profile.html">
                                        View Profile</a></button>
                            </div>
                        </div>
                    </li>

                    <li class="bg-white border p-4 mt-2">
                        <div class="row">
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Name:
                                </div>
                                <div class="">
                                    Lorem Ipsum
                                </div>
                            </div>
                            <div class="col-lg-3  mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Group:
                                </div>
                                <div class="">
                                    B+
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Location:
                                </div>
                                <div class="">
                                    <span>Dhaka</span>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <button class="btn btn-sm btn-primary ml-2"><a class="text-white" href="profile.html">
                                        View Profile</a></button>
                            </div>
                        </div>
                    </li>

                    <li class="bg-white border p-4 mt-2">
                        <div class="row">
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Name:
                                </div>
                                <div class="">
                                    Lorem Ipsum
                                </div>
                            </div>
                            <div class="col-lg-3  mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Group:
                                </div>
                                <div class="">
                                    B+
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Location:
                                </div>
                                <div class="">
                                    <span>Dhaka</span>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <button class="btn btn-sm btn-primary ml-2"><a class="text-white" href="profile.html">
                                        View Profile</a></button>
                            </div>
                        </div>
                    </li>

                    <li class="bg-white border p-4 mt-2">
                        <div class="row">
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Name:
                                </div>
                                <div class="">
                                    Lorem Ipsum
                                </div>
                            </div>
                            <div class="col-lg-3  mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Group:
                                </div>
                                <div class="">
                                    B+
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Location:
                                </div>
                                <div class="">
                                    <span>Dhaka</span>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <button class="btn btn-sm btn-primary ml-2"><a class="text-white" href="profile.html">
                                        View Profile</a></button>
                            </div>
                        </div>
                    </li>

                    <li class="bg-white border p-4 mt-2">
                        <div class="row">
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Name:
                                </div>
                                <div class="">
                                    Lorem Ipsum
                                </div>
                            </div>
                            <div class="col-lg-3  mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Group:
                                </div>
                                <div class="">
                                    B+
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Location:
                                </div>
                                <div class="">
                                    <span>Dhaka</span>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <button class="btn btn-sm btn-primary ml-2"><a class="text-white" href="profile.html">
                                        View Profile</a></button>
                            </div>
                        </div>
                    </li>

                    <li class="bg-white border p-4 mt-2">
                        <div class="row">
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Name:
                                </div>
                                <div class="">
                                    Lorem Ipsum
                                </div>
                            </div>
                            <div class="col-lg-3  mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Group:
                                </div>
                                <div class="">
                                    B+
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Location:
                                </div>
                                <div class="">
                                    <span>Dhaka</span>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <button class="btn btn-sm btn-primary ml-2"><a class="text-white" href="profile.html">
                                        View Profile</a></button>
                            </div>
                        </div>
                    </li>

                    <li class="bg-white border p-4 mt-2">
                        <div class="row">
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Name:
                                </div>
                                <div class="">
                                    Lorem Ipsum
                                </div>
                            </div>
                            <div class="col-lg-3  mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Group:
                                </div>
                                <div class="">
                                    B+
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Location:
                                </div>
                                <div class="">
                                    <span>Dhaka</span>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <button class="btn btn-sm btn-primary ml-2"><a class="text-white" href="profile.html">
                                        View Profile</a></button>
                            </div>
                        </div>
                    </li>

                    <li class="bg-white border p-4 mt-2">
                        <div class="row">
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Name:
                                </div>
                                <div class="">
                                    Lorem Ipsum
                                </div>
                            </div>
                            <div class="col-lg-3  mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Group:
                                </div>
                                <div class="">
                                    B+
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Location:
                                </div>
                                <div class="">
                                    <span>Dhaka</span>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <button class="btn btn-sm btn-primary ml-2"><a class="text-white" href="profile.html">
                                        View Profile</a></button>
                            </div>
                        </div>
                    </li>

                    <nav class="mt-4" aria-label="Page navigation ">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </ul>
            </div>
            <!-- SEARCH RESULT END -->
        </div>
    </section>
    <!-- SEARCH END -->
@endsection
