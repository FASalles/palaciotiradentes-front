@extends('layouts.layout')
@section('main')

    <main>
        <div class="header-banner-wrap">
            <div class="essence-banner-image" style="background-image: url(&quot;http://www.palaciotiradentes.rj.gov.br/wp-content/uploads/2016/04/bg-header-internas.jpg&quot;)">

            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title" style="color: #ffffff">Tour Virtual</h2>
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
                                <span>Tour Virtual</span>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container page-content">
            <div class="row mb-2 text-center">
                <div class="col-md-12 page-title">
                    <h2>
                        EXPLORE O PALÁCIO EM 360º
                    </h2>
                    <h6>
                        Todo encanto e beleza do nosso patrimônio.
                    </h6>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-12">
                    <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='http://fotografia360graus.com/wp-content/uploads/panoramicas/ALERJ - Palacio Tiradentes.html' allowfullscreen='allowfullscreen' style='pointer-events: none;'></iframe></div>
                </div>
            </div>
        </div>

    </main>

@endsection
