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
                <form class="row" action="{{ route('search.donor') }}" method="POST">
                    <div class="col-lg-2">
                        <div class="form-group mb-3">
                            <label for="bloodgroup" class="small">Blood Group</label>
                            <select class="custom-select small" id="bloodgroup">
                                <option disabled selected>Select One</option>
                                @foreach ($bloods as $blood)
                                    <option value="{{ $blood->id }}">{{ $blood->blood_group }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group mb-3">
                            <label for="city" class="small">City</label>
                            <select class="custom-select small" id="city">
                                <option disabled selected>Select One</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group mb-3">
                            <label for="location" class="small">Location</label>
                            <select class="custom-select small" id="location">
                                <option disabled selected>Select One</option>
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group mb-3">
                            <label for="type" class="small">Donor Type</label>
                            <select class="custom-select small" id="type">
                                <option disabled selected>Select One</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-1 mt-lg-4 pt-2">
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


                    @foreach ($results as $result)
                        
                    @endforeach
                    <li class="bg-white border p-4 mt-2">
                        <div class="row">
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Name:
                                </div>
                                <div class="">
                                    {{$result->fullname}}
                                </div>
                            </div>
                            <div class="col-lg-3  mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Group:
                                </div>
                                <div class="">
                                    {{$result->blood_group_name}}
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <div class="text-secondary small">
                                    Location:
                                </div>
                                <div class="">
                                    <span> {{$result->location_name . ", " . $result->city_name}}</span>
                                </div>
                            </div>
                            <div class="col-lg-3 mb-2 mb-lg-0">
                                <button class="btn btn-sm btn-primary ml-2"><a class="text-white" href="{{ route('donor.profile', ['id'=> $result->donor_id]) }}"> View
                                        Profile</a></button>
                            </div>
                        </div>
                    </li>


                    {{-- <nav class="mt-4" aria-label="Page navigation ">
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
                    </nav> --}}
                </ul>
            </div>
            <!-- SEARCH RESULT END -->
        </div>
    </section>
    <!-- SEARCH END -->
@endsection
