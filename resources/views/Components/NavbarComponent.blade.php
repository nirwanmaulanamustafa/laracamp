<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('/')}}">
            <img src="{{'/assets/images/logo.png'}}" alt="">
        </a>
        <div class="navbar-toggler container-hamburger border-0" data-bs-toggle="collapse" data-bs-target="#container-hamburger" aria-controls="container-hamburger" aria-expanded="false" aria-label="Toggle navigation" onclick="NavbarX(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <div class="collapse navbar-collapse" id="container-hamburger">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mentor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Business</a>
                </li>
            </ul>

            @auth
            <div class="d-flex user-logged nav-item dropdown no-arrow">
                <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" arial-expanded="false">
                    Halo, {{Auth::user()->name}}
                    <img src="{{Auth::user()->avatar}}" class="user-photo rounded-circle" alt="">
                    <ul class="dropdown-menu" arial-labelledby="dropdownMenuLink" style="right:0; left:auto">
                        <li>
                            <a href="#" class="dropdown-item">My Dashboard </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out </a>
                            <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display:none">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </li>

                    </ul>
                </a>
            </div>
                @else   
                <div class="d-flex">
                    <a href="{{ route('login') }}" class="btn btn-master btn-secondary me-3">
                        Sign In
                    </a>
                    <a href="#" class="btn btn-master btn-primary">
                        Sign Up
                    </a>
                </div>
            @endauth

            
        </div>
    </div>
</nav>