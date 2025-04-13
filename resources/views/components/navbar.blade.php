{{-- NAVBAR SITO --}}

<nav class="container">
    <div class="navbar navbar-expand-lg navbar-custom rounded" aria-label="Eleventh navbar example">
        <div class="container-fluid">

            {{-- PARTE SINISTRA --}}

            <a href="{{ route('welcome') }}"><img class="navbar-logo mx-4" src="{{ asset('images/logo.png') }}" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            {{-- PARTE CENTRALE --}}

            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav nav-links me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link colorS fontS fs-4" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link colorS fontS fs-4" href="{{ route('search') }}">Cerca</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link colorS fontS dropdown-toggle fs-4" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>

            {{-- PARTE DESTRA --}}

                <form class="d-flex" action="{{ route('search') }}" method="GET">
                    <input class="form-control fontS rounded border mx-3" type="text" placeholder="Cerca" aria-label="Search" name="q">
                    <button type="submit" class="btn btn-search-custom">   
                        <i class="bi bi-search"></i>                    
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>