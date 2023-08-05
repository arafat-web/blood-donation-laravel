@extends('client.layout.app')
@section('title')
    Donor Information
@endsection

@section('content')
    <div class="top-header">
        <div class="top-site-map text-danger">
            <div style="height: 250px;" class="text-center m-0 d-flex flex-column justify-content-center">
                <h2 class="text-white">Lorem Ipsum</h2>
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
                                <h5 class="text-black mt-2 text-center">Lorem Ipsum</h5>
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
                                                    <span class="list-bg-des">Lorem Ipsum</span>
                                                </li>
                                                <li class="list-group-item no-padding">
                                                    <span class="list-bg-title">Email</span>
                                                    <span class="list-bg-des">donor@gmail.com</span>
                                                </li>
                                                <li class="list-group-item no-padding">
                                                    <span class="list-bg-title">Phone</span>
                                                    <span class="list-bg-des">017xxxxxxxx</span>
                                                </li>
                                                <li class="list-group-item no-padding">
                                                    <span class="list-bg-title">City</span>
                                                    <span class="list-bg-des">Dhaka</span>
                                                </li>
                                                <li class="list-group-item no-padding">
                                                    <span class="list-bg-title">Location</span>
                                                    <span class="list-bg-des">Dhaka</span>
                                                </li>
                                                <li class="list-group-item no-padding">
                                                    <span class="list-bg-title">Gender</span>
                                                    <span class="list-bg-des">Male</span>
                                                </li>
                                                <li class="list-group-item no-padding">
                                                    <span class="list-bg-title">Date of Birth</span>
                                                    <span class="list-bg-des">27 September 1888</span>
                                                </li>
                                                <li class="list-group-item no-padding">
                                                    <span class="list-bg-title">Address</span>
                                                    <span class="list-bg-des">Uttara, Dhaka</span>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                        aria-labelledby="v-pills-messages-tab">
                                        <h5 class="text-black border-bottom mb-4 mt-4">Messages</h5>
                                        <div class="msg">
                                            <div class="list-group no-margin">

                                                <a href="chat-area.html" class="list-group-item list-group-item-action">
                                                    <img src="assets/images/man.jpg"
                                                        style="border-radius: 50%; width: 50px; height: 50px; float: left;"
                                                        class="circle" alt="">
                                                    <div style="margin-left: 70px;" class="msg-block">
                                                        <span style="display: block;" class="text-black">Lorem Ipsum</span>
                                                        <span style="display: block;" class="text-secondary small pt-2">Can
                                                            you help me?</span>
                                                    </div>
                                                </a>

                                                <a href="chat-area.html" class="list-group-item list-group-item-action">
                                                    <img src="assets/images/man.jpg"
                                                        style="border-radius: 50%; width: 50px; height: 50px; float: left;"
                                                        class="circle" alt="">
                                                    <div style="margin-left: 70px;" class="msg-block">
                                                        <span style="display: block;" class="text-black">Lorem Ipsum</span>
                                                        <span style="display: block;" class="text-secondary small pt-2">Can
                                                            you help me?</span>
                                                    </div>
                                                </a>

                                                <a href="chat-area.html" class="list-group-item list-group-item-action">
                                                    <img src="assets/images/man.jpg"
                                                        style="border-radius: 50%; width: 50px; height: 50px; float: left;"
                                                        class="circle" alt="">
                                                    <div style="margin-left: 70px;" class="msg-block">
                                                        <span style="display: block;" class="text-black">Lorem Ipsum</span>
                                                        <span style="display: block;"
                                                            class="text-secondary small pt-2">Can you help me?</span>
                                                    </div>
                                                </a>

                                                <a href="chat-area.html" class="list-group-item list-group-item-action">
                                                    <img src="assets/images/man.jpg"
                                                        style="border-radius: 50%; width: 50px; height: 50px; float: left;"
                                                        class="circle" alt="">
                                                    <div style="margin-left: 70px;" class="msg-block">
                                                        <span style="display: block;" class="text-black">Lorem
                                                            Ipsum</span>
                                                        <span style="display: block;"
                                                            class="text-secondary small pt-2">Can you help me?</span>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>


                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                        aria-labelledby="v-pills-settings-tab">
                                        <h5 class="text-black border-bottom mb-4 mt-4">Settings</h5>
                                        <form class="card pb-2">
                                            <div class="big text-black mt-3 ml-4 mb-2">Change Password</div>
                                            <div class="row mx-2">

                                                <div class="col-lg-4">
                                                    <label for="psw">Old Password <span
                                                            class="small text-danger">*</span></label>
                                                    <input type="password" id="psw" class="form-control small" />
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="psw">New Password <span
                                                            class="small text-danger">*</span></label>
                                                    <input type="password" id="psw" class="form-control small" />
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="psw">Repeat New Password <span
                                                            class="small text-danger">*</span></label>
                                                    <input type="password" id="psw" class="form-control small" />
                                                </div>
                                            </div>
                                            <div class="psw-update mt-3 ml-4">
                                                <a href=""><button class="btn btn-info">Update</button></a>
                                            </div>

                                        </form>

                                        <form class="card pb-2">
                                            <div class="big text-black mt-3 ml-4 mb-2">Status</div>
                                            <div class="row mx-2">

                                                <div class="col-lg-4">
                                                    <label for="status">Availability <span
                                                            class="small text-danger">*</span></label>
                                                    <select class="custom-select small" id="status">
                                                        <option disabled selected>Select Option</option>
                                                        <option value="1">Available</option>
                                                        <option value="2">Not Available</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="psw-update mt-3 ml-4">
                                                <a href=""><button class="btn btn-info">Update</button></a>
                                            </div>

                                        </form>

                                    </div>

                                    <div class="tab-pane fade" id="v-pills-donations" role="tabpanel"
                                        aria-labelledby="v-pills-donations-tab">
                                        <h5 class="text-black border-bottom mb-4 mt-4">Donations</h5>
                                        <form class="card pb-2">
                                            <div class="big text-black mt-3 ml-4 mb-2">Last Donation</div>
                                            <div class="row mx-2">

                                                <div class="col-lg-4">
                                                    <label for="dob">Last Donation <span
                                                            class="small text-danger">*</span></label>
                                                    <input type="date" id="dob" class="form-control small" />
                                                </div>
                                            </div>
                                            <div class="psw-update mt-3 ml-4">
                                                <a href=""><button class="btn btn-info">Update</button></a>
                                            </div>

                                        </form>
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
