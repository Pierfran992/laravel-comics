{{-- parte top dell'header --}}
<div class="container-fluid ms_top_header">
    <div class="container ms_MS"> 
        <ul class="d-flex justify-content-end align-items-center gap-5 ms_ul_top_header m-0">
            <li>
                <a href="#">DC POWER VISA</a>
            </li>
            <li>
                <a href="#">ADDITIONAL DC SITES
                </a>
            </li>
        </ul>
    </div>
</div>
{{-- nav bar dell'header --}}
<div class="container-fluid ms_bottom_header">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo_dc_comics" id="ms_logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">CHARACTERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ms_active" href="#">COMICS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MOVIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">TV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">GAMES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">COLLECTIBLES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">VIDEOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FANS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">NEWS</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SHOP
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</div>