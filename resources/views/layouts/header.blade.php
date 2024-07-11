<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand">{{ $pageTitle }}</a>
        {{-- <a class="navbar-brand"> HOME </a> --}}
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            {{-- <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nc-icon nc-zoom-split"></i>
                        <span class="d-lg-block">&nbsp;Search</span>
                    </a>
                </li>
            </ul> --}}
            <ul class="navbar-nav ml-auto">
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#pablo">
                        <span class="no-icon">Account</span>
                    </a>
                </li> --}}
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="no-icon">Welcome</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">My Profile</a>
                        <div class="divider"></div>
                        <a class="dropdown-item" href="/logout">Log out</a>
                    </div>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="/logout">
                        <span class="no-icon">Log out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>