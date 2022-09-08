<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <div class="nav-item dropdown bg-transparent">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <!-- <i class="flag-icon flag-icon-{{ session()->get('locale') == null ? 'us' : session()->get('locale') }} mr-2"
                        id="lng"></i> -->
                </a>
                <div class="dropdown-menu dropdown-menu-right p-0">
                    @foreach (\Config::get('app.available_locales') as $locale)
                        <a href="{{ route('change.locale', $locale['code']) }}"
                            class="dropdown-item {{ session('locale') == $locale['code'] ? 'active' : '' }}">
                            <i class="flag-icon flag-icon-{{ $locale['flag'] }} mr-2"></i> {{ $locale['name'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </li>

        <!-- Navbar Search -->
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST" class="nav-link">
                @csrf
                <i class="fas fa-sign-out-alt"
                    onclick="event.preventDefault();
                this.closest('form').submit();"></i>
            </form>

        </li>
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
        </li>


    </ul>
</nav>
<!-- /.navbar -->
