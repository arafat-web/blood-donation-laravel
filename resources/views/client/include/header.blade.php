<header class="continer-fluid ">
    <div id="menu-jk" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div class="col-md-3 logo">
                    <img src="{{asset('client')}}/assets/images/logo.jpg" alt="">
                </div>
                <div class="col-md-9 nav-col">
                    <nav class="navbar navbar-expand-lg navbar-light">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item {{ request()->routeIs('index') ? 'active' : null }}">
                                    <a class="nav-link" href="{{route('index')}}">Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#process">Process</a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('contact') ? 'active' : null }}">
                                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link btn btn-danger text-white" href="{{route('donate.now')}}">Donate Now</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
