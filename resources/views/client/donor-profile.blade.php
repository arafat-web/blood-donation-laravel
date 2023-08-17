@extends('client.layout.app')
@section('title')
    Donor Information
@endsection

@section('content')
    <div class="top-header">
        <div class="top-site-map text-danger">
            <div style="height: 250px;" class="text-center m-0 d-flex flex-column justify-content-center">
                <h2 class="text-white">{{$result->fullname}}</h2>
                <p class="text-white"><a class="text-danger" href="{{ route('index') }}">Home </a> <span class="text-danger"><i
                            class="fas fa-long-arrow-alt-right"></i></span> Donor Informations </p>
            </div>
        </div>
    </div>

    <!-- LOGIN START -->
    <section class="login mt-5">
        <div class="container">
            <!-- LOGIN MAIN START -->
            <div class="login-main">
                <div class="card text-white mb-3">
                    <div style="font-size: 23px;" class="card-header bg-info  text-center">Donor Informations</div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-3 border-right">
                                >
                                <img src="assets/images/man.jpg" alt="" style="width: 350px;" class="card-img">
                                <h5 class="text-black mt-2 text-center">{{$result->fullname}}</h5>
                                <h6 class="text-black mt-2 text-center">{{$result->blood_group_name}}</h6>
                                <div class="text-center">
                                    <h6 class="bg-danger d-inline-block px-3 font-weight-bold text-center py-2">I'm a
                                        Donor</h6>
                                </div>


                            </div>
                            <div class="col-lg-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane text-black fade show active" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab">
                                        <!-- <h5 class="text-black border-bottom mb-4 mt-4">Donor Information</h5> -->


                                        <div class="detials">
                                            <ul class="list-group no-margin">
                                                <li class="list-group-item no-padding">
                                                    <span class="list-bg-title">Name</span>
                                                    <span class="list-bg-des">{{$result->fullname}}</span>
                                                </li>
                                                <li class="list-group-item no-padding">
                                                    <span class="list-bg-title">Email</span>
                                                    <span class="list-bg-des">{{$result->email}}</span>
                                                </li>
                                                <li class="list-group-item no-padding">
                                                    <span class="list-bg-title">Phone</span>
                                                    <span class="list-bg-des">{{$result->phone}}</span>
                                                </li>
                                                <li class="list-group-item no-padding">
                                                    <span class="list-bg-title">City</span>
                                                    <span class="list-bg-des">{{$result->city_name}}</span>
                                                </li>
                                                <li class="list-group-item no-padding">
                                                    <span class="list-bg-title">Location</span>
                                                    <span class="list-bg-des">{{$result->location_name}}</span>
                                                </li>
                                                <li class="list-group-item no-padding">
                                                    <span class="list-bg-title">Gender</span>
                                                    <span class="list-bg-des">{{$result->gender}}</span>
                                                </li>
                                                <li class="list-group-item no-padding">
                                                    <span class="list-bg-title">Date of Birth</span>
                                                    <span class="list-bg-des">{{$result->date_of_birth}}</span>
                                                </li>
                                                <li class="list-group-item no-padding">
                                                    <span class="list-bg-title">Address</span>
                                                    <span class="list-bg-des">{{$result->address}}</span>
                                                </li>
                                                <li class="list-group-item no-padding">
                                                    <span class="list-bg-title">Profile Views</span>
                                                    <span class="list-bg-des">{{$result->profile_views}}</span>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LOGIN MAIN END -->
        </div>
    </section>
    <!-- SEARCH END -->
@endsection
