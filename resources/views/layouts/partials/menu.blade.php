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
                        <a class="nav-link" href="{{route('cultural-calendar')}}">Agenda Cultural</a>
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
