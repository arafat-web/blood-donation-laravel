@extends('client.layout.app')
@section('title')
    Home
@endsection

@section('content')
    <!-- ################# Slider Starts Here#######################--->

    <div class="hero-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="left-area">
                        <div class="hero_big-text text-danger">
                            donate blood today!
                        </div>
                        <div class="hero_small-text text-danger">
                            you can help save a life!
                        </div>
                        <div class="hero_des-text mt-4 mb-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem veritatis voluptate
                            accusamus minus obcaecati quasi temporibus itaque, amet quis pariatur dolore dicta similique
                            voluptatibus ad assumenda ipsam ipsa laudantium maiores.
                        </div>
                        <div class="hero-btn">
                            <button class="btn btn-danger">Donate Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex justify-content-end">
                    <div class="card bg-light mt-4 ml-sm-3" style="width: 25rem;">
                        <h4 style="font-family: Merriweather, serif;" class="card-header font-weight-bold">Search Donors
                        </h4>
                        <div class="card-body">
                            <form class="form-body" method="POST" action="{{ route('search.donor') }}" >
                                @csrf
                                <div class="input-group mb-3">
                                    <select class="custom-select small" name="blood_group">
                                        <option disabled selected>Select Blood Group</option>
                                        @foreach ($groups as $group)
                                            <option value="{{ $group->id }}">{{ $group->blood_group }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <select class="custom-select small select-2" name="city">
                                        <option disabled selected>Select City</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <select class="custom-select small select-2" name="location">
                                        <option disabled selected>Select Location</option>
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <select class="custom-select small" name="gender">
                                        <option disabled selected>Select Donor Type</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-danger w-100">Search Donor</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--*************** About Us Starts Here ***************-->
    <section id="about" class="contianer-fluid about-us">
        <div class="container">
            <div class="row session-title">
                <h2>About Us</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has</p>
            </div>
            <div class="row">
                <div class="col-md-6 text">
                    <h2>About Blood Donors</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                        passages, and more recently with desktop publishing software like Aldus PageMaker including
                        versions of Lorem Ipsum.</p>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some formhumour, or randomised words which don't look even slightly believable. If
                        you are going to use a passage. industry's standard dummy has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p>Industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                        also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class="col-md-6 image">
                    <img src="{{ asset('client') }}/assets/images/about.jpg" alt="">
                </div>
            </div>
        </div>
    </section>


    <!-- ################# Donation Process Start Here #######################--->

    <section id="process" class="donation-care">
        <div class="container">
            <div class="row session-title">
                <h2>Donation Process</h2>
                <p class="text-center">The donation process from the time you arrive center until the time you leave</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu border">
                        <img src="{{ asset('client') }}/assets/images/gallery/g1.jpg" alt="">
                        <h3 class="mt-2 text-danger"><b>1 - </b>Registration</h3>
                        <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit
                            lobortis</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu border">
                        <img src="{{ asset('client') }}/assets/images/gallery/g2.jpg" alt="">
                        <h3 class="mt-2 text-danger"><b>2 - </b>Seeing</h3>
                        <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit
                            lobortis</p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu border">
                        <img src="{{ asset('client') }}/assets/images/gallery/g3.jpg" alt="">
                        <h3 class="mt-2 text-danger"><b>3 - </b>Donation</h3>
                        <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit
                            lobortis</p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd ">
                    <div class="bkjiu border">
                        <img src="{{ asset('client') }}/assets/images/gallery/g4.jpg" alt="">
                        <h3 class="mt-2 text-danger"><b>4 - </b>Save Life</h3>
                        <p>Ut wisi enim ad minim veniam, quis laore nostrud exerci tation ulm hedi corper turet suscipit
                            lobortis</p>

                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="counter top-header">
        <div class="container">

            <div id="counters" class="row p-2">
                <!-- <div class="row"> -->
                <div class="counter-div text-center mt-0 mt-lg-5 col-md-4">
                    <div class="counter text-white" data-TargetNum="{{$group_count}}" data-Speed="2000">0</div>
                    <div class="text-white">Total Groups</div>
                </div>

                <div class="counter-div text-center mt-0 mt-lg-5 col-md-4">
                    <div class="counter text-white" data-TargetNum="{{$location_count}}" data-Speed="2000">0</div>
                    <div class="text-white">Locations</div>
                </div>
                <div class="counter-div text-center mt-3 mt-lg-5 col-md-4">
                    <div class="counter text-white" data-TargetNum="{{$donor_count}}" data-Speed="2000">0</div>
                    <div class="text-white">Total Donor</div>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </section>


    <!--################### Our Blog Starts Here #######################--->
    <div id="blog" class="blog-container contaienr-fluid">
        <div class="container">
            <div class="session-title row">
                <h2>Latest Addition</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut
                    est arcu. Donec hendrerit velit consectetur adipiscing elit.</p>
            </div>
            <div class="row">
                @foreach ($donors as $donor)
                    
               
                <div class="col-lg-3 mb-5">
                    <div class="card">
                        <img class="card-img-top doner-img" src="{{ asset('client') }}/assets/images/man.jpg"
                            alt="Card image cap">
                        <div class="card-body bg-danger text-white text-center">
                            <h5 class="card-text">{{$donor->fullname}}</h5>
                            <p class="card-text small">Blood Group: ({{$donor->blood_group_name}})</p>
                            <p class="card-text small">{{$donor->location_name . ', ' . $donor->city_name}}</p>
                            <button class="btn mt-2 btn-sm btn-outline-light"><a class="text-white" href="{{ route('donor.profile', ['id'=> $donor->donor_id]) }}"> View
                                Profile</a></button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
