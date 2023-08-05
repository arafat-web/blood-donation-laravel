@extends('client.layout.app')
@section('title')
Be a donor
@endsection

@section('content')
<div class="top-header">
    <div class="top-site-map text-danger">
        <div style="height: 250px;" class="text-center m-0 d-flex flex-column justify-content-center">
            <h2 class="text-white">Be a Donator</h2>
            <p class="text-white"><a class="text-danger" href="{{route('index')}}">Home  </a> <span class="text-danger"><i class="fas fa-long-arrow-alt-right"></i></span> Donor Form </p>
        </div>
    </div>
</div>

<!-- LOGIN START -->
<section class="login mt-5">
    <div class="container">
        <!-- LOGIN MAIN START -->
        <div class="login-main d-flex justify-content-center  p-2">
            <div class="card text-white mb-3" style="max-width: 30rem;">
                <div style="font-size: 23px;" class="card-header bg-info  text-center">Be a Donator</div>
                <div class="card-body">
                    <p class="text-black">
                        <h5 class="big text-danger text-center">"Safe blood saves lives"</h5>
                        <span class="text-black">
                            Blood is the most precious gift that anyone can give to another person – the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components – red cells, platelets and plasma – which can be used individually for patients with specific conditions.
                        </span>
                        <span class=" text-danger big d-block mt-3">It's easy to be a Donator. Follow the following step & start saving life:</span>
                        <ol>
                            <li class="text-black mt-2">
                                <span>
                                   1. First, <a class="text-success" href="{{route('donor.register')}}">Register</a> with your information.
                                </span>
                            </li>
                            <li class="text-black mt-2">
                                <span>
                                   2. Admin will check your information.
                                </span>
                            </li>
                            <li class="text-black mt-2">
                                <span>
                                   3. Done, Start saving life
                                </span>
                            </li>
                        </ol>

                        <button class="btn btn-danger"><a class="text-white" href="{{route('donor.register')}}">Be a Donator Now</a> </button>
                    </p>
                </div>
            </div>
        </div>
        <!-- LOGIN MAIN END -->
    </div>
</section>
<!-- SEARCH END -->
@endsection




