<!-- Navbar Dekstop-->
    <div class="container d-none d-lg-block">
        <nav class="navbar navbar-dekstop navbar-expand-lg navbar-dark navbar-light p-0">
            <div class="container-fluid">
                <a class="navbar-brand ms-3" href="{{ route('megahkarya') }}">Megah Karya</a>
                <button class="navbar-toggler navbar-dark me-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-custom px-3 py-2" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0">
                        <li class="nav-item me-3">
                            <a class="nav-link" aria-current="page" href="{{ route('megahkarya') }}">Home</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" aria-current="page" href="{{ route('product') }}">Map Ijazah</a>
                        </li>
                        <li class="nav-item me-3 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Perlengkapan Sekolah
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Seragam Sekolah</a></li>
                                <li><a class="dropdown-item" href="#">Seragam Batik</a></li>
                                <li><a class="dropdown-item" href="#">Seragam Olahraga</a></li>
                                <li><a class="dropdown-item" href="#">Topi</a></li>
                                <li><a class="dropdown-item" href="#">Dasi</a></li>
                                <li><a class="dropdown-item" href="#">Bad Lokasi</a></li>
                                <li><a class="dropdown-item" href="#">Sabuk</a></li>
                                <li><a class="dropdown-item" href="#">Kaos Kaki</a></li>
                                <li><a class="dropdown-item" href="#">Kalung wisuda</a></li>
                            </ul>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="#">Sablon Digital</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="{{ route('profile') }}">Profil</a>
                        </li>
                    </ul>
                    <form action="{{ route('login') }}">
                        <button class="btn btn-login rounded px-4 me-3" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>