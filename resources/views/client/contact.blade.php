@extends('client.layout.app')
@section('title')
    Home
@endsection

@section('content')

    <div class="top-header">
        <div class="top-site-map text-danger">
            <div style="height: 250px;" class="text-center m-0 d-flex flex-column justify-content-center">
                <h2 class="text-white">Contact</h2>
                <p class="text-white"><a class="text-danger" href="{{route('index')}}">Home </a> <span class="text-white"> <i
                            class="fas fa-long-arrow-alt-right"></i> Contact
                </p>
            </div>
        </div>
    </div>

    <!-- SIGNUP START -->
    <section class="login mt-5">
        <div class="container">
            <!-- SIGNUP MAIN START -->
            <!-- d-flex justify-content-center -->
            <div class="login-main d-flex justify-content-center   p-2">
                <div class="card text-white mb-3" style="width: 30rem;">
                    <div style="font-size: 23px;" class="card-header bg-info  text-center">Contact Form</div>
                    <div class="card-body">
                        <form action="">
                            <h5 class="text-black mb-4">Tell Us!</h5>
                            <div class="form-row">
                                <div class="form-group  col-md-12 px-3">
                                    <label for="name">Name <span class="small text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" placeholder="Full Name" required>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 px-3">
                                    <label for="email">Email <span class="small text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter Email" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12 px-3">
                                    <label for="email">Your Message <span class="small text-danger">*</span></label>
                                    <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>




                            <button type="submit" class="btn w-100 mt-4 btn-info">Send</button>
                        </form>

                    </div>
                </div>
            </div>
            <!-- SIGNUP MAIN END -->
        </div>
    </section>
    <!-- SIGNUP END -->
@endsection
