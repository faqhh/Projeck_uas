<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ url('frontend/home') }}">Home</a></li>
                <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ url('frontend/about') }}">About</a></li>
                <li class="nav-item px-lg-4 dropdown">
                    <a class="nav-link text-uppercase dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Genre</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('frontend/action') }}">Action</a>
                        <a class="dropdown-item" href="{{ url('frontend/romance') }}">Romance</a>
                        <a class="dropdown-item" href="{{ url('frontend/horor') }}">Horor</a>
                        <a class="dropdown-item" href="{{ url('frontend/inspiratif') }}">Inspiratif</a>
                        <a class="dropdown-item" href="{{ url('frontend/komedi') }}">Komedi</a>
                        <a class="dropdown-item" href="{{ url('frontend/thriller') }}">Thriller</a>
                        <a class="dropdown-item" href="{{ url('frontend/fantasi') }}">Fiksi</a>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link text-uppercase dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
