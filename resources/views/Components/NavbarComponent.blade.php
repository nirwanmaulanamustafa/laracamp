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
            <div class="d-flex">
                <a href="{{ route('BeLogin') }}" class="btn btn-master btn-secondary me-3">
                    Sign In
                </a>
                <a href="#" class="btn btn-master btn-primary">
                    Sign Up
                </a>
            </div>
        </div>
    </div>
</nav>