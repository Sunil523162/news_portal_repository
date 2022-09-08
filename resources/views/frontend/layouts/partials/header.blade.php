<!-- Start Top Header Area -->
<div class="top-header-areas m-2">
    <div class="container">
        <div class="row">
            <div>
                <img src="{{ asset('frontend/assets/img/testimg.gif') }}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- End Top Header Area -->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('frontend/assets/img/fortunenews.jpeg') }}" class="black-logo"
                            alt="image">
                        <img src="assets/img/logo-3.png" class="white-logo" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('frontend/assets/img/pp.png') }}" class="black-logo" alt="image">
                    {{-- <img src="{{asset('frontend/assets/img/pp.jpeg')}}" class="white-logo" alt="image"> --}}
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                                Home
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="{{ route('politics') }}" class="nav-link {{ request()->is('politics') ? 'active' : '' }}">
                                Politics
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('business') }}" class="nav-link {{ request()->is('business') ? 'active' : '' }}">
                                Business
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('tech') }}" class="nav-link {{ request()->is('technology') ? 'active' : '' }}">
                                Tech
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('sports') }}" class="nav-link {{ request()->is('sport') ? 'active' : '' }}">
                                Sport
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('culture') }}" class="nav-link {{ request()->is('culture') ? 'active' : '' }}">
                                Culture
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('video') }}" class="nav-link {{ request()->is('video') ? 'active' : '' }}">
                                Video
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('news') }}" class="nav-link {{ request()->is('news') ? 'active' : '' }}">
                               Important News
                            </a>
                        </li>

                    </ul>

                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <form class="search-box" method="GET" action="{{ route('post.search') }}">
                                <input type="text" class="form-control" placeholder="Search for.." name="search">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div>
                </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
<!--
    <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li> -->

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <form class="search-box" method="GET" action="{{ route('post.search') }}">
                                <input type="text" class="form-control" placeholder="Search for.." name="search">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
