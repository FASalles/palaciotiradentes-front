@extends('layouts.layout')
@section('main')

    <main>
        <div class="header-banner-wrap">
            <div class="essence-banner-image" style="background-image: url(&quot;http://www.palaciotiradentes.rj.gov.br/wp-content/uploads/2016/04/bg-header-internas.jpg&quot;)">

            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title" style="color: #ffffff">Como Chegar</h2>
                </div>

                <div class="header-breadcrumb-wrap color-changer1" data-color="#999999" data-c-target="span, li">
                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li class="trail-item trail-begin">
                                <a href="http://www.palaciotiradentes.rj.gov.br" rel="home">
                                    <span>Home</span>
                                </a>

                            </li>
                            <li class="trail-item trail-end">
                                <span>Como Chegar</span>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container page-content">
            <div class="row mb-2 text-center">
                <div class="col-md-12 page-title">
                   {{-- <h2>PALÁCIO TIRADENTES</h2>
                    <h6>Através da História</h6>--}}
                        <h1 class="titulo" style="text-align: center;">PALÁCIO TIRADENTES</h1>
                        <p style="text-align: center;">Rua Primeiro de março, s/n – Praça XV – Rio de Janeiro<br>
                            CEP 20010-090 &nbsp;&nbsp; Telefone +55 (21) 2588-1000 &nbsp;&nbsp; Fax +55 (21) 2588-1516
                        </p>
                </div>
            </div>
        </div>

        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-12" style="padding: 0px;">
                    <iframe width="100%" height="670" src="https://maps.google.com/maps?q=palacio%20tiradentes&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
            </div>
        </div>

    </main>

@endsection
