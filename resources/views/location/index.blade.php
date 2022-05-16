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
                    <iframe width="100%" height="670" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d595.7777682050493!2d-43.174387404691174!3d-22.903790291067544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9981f3fc19ab57%3A0x7c23cc164f32518d!2sPal%C3%A1cio%20Tiradentes%20(Antigo%20Congresso%20Nacional%20e%20antiga%20ALERJ)!5e0!3m2!1sen!2sbr!4v1652743766600!5m2!1sen!2sbr" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
            </div>
        </div>

    </main>

@endsection
