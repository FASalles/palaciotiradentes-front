
{{--NAVBAR SAMPLE--}}
{{--
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
--}}


<nav class="navbar navbar-expand-lg navbar-light bg-light py-3 menu-style">
    <div class="container-fluid">
        <a href="/"
           class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img src="/images/logo-palacio-90anos-alerj.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">
                        Início
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        O Palácio
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('history')}}">História</a></li>
                        <li><a class="dropdown-item" href="{{route('timeline')}}">Linha do Tempo</a></li>
                        <li><a class="dropdown-item" href="{{route('virtual-tour')}}">Tour Virtual</a></li>
                        <li><a class="dropdown-item" href="{{route('guided-tour')}}">Visita Guiada</a></li>
                        <li><a class="dropdown-item" href="{{route('location')}}">Mapa de Localização</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('posts')}}">Blog</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Galerias
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('photos')}}">Galeria de Fotos</a></li>
                        <li><a class="dropdown-item" href="{{route('videos')}}">Galeria de Vídeos</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('exhibitions')}}">Agenda Cultural</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('clippings')}}">Na Mídia</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{route('publications')}}">Publicações</a>
                </li>


            </ul>
{{--

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
--}}


        </div>
    </div>
</nav>


{{--

    <div class="container-fluid">
        <div class="row">
            <header class="d-flex flex-wrap justify-content-center py-3 tr-header">
                <a href="/"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <img src="/images/logo-palacio-90anos-alerj.png">
                </a>

                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="{{route('home')}}" class="nav-link active" aria-current="page">
                            Início
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            O Palácio
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('history')}}">História</a></li>
                            <li><a class="dropdown-item" href="{{route('timeline')}}">Linha do Tempo</a></li>
                            <li><a class="dropdown-item" href="{{route('virtual-tour')}}">Tour Virtual</a></li>
                            <li><a class="dropdown-item" href="{{route('guided-tour')}}">Visita Guiada</a></li>
                            <li><a class="dropdown-item" href="{{route('location')}}">Mapa de Localização</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('posts')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('exhibitions')}}">Agenda Cultural</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('clippings')}}">Na Mídia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('publications')}}">Publicações</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Galerias
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('photos')}}">Galeria de Fotos</a></li>
                            <li><a class="dropdown-item" href="{{route('videos')}}">Galeria de Vídeos</a></li>
                        </ul>
                    </li>
                </ul>
            </header>
        </div>

    </div>
--}}
