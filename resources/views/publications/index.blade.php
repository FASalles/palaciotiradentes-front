@extends('layouts.layout')
@section('main')
    <main>
        <div class="header-banner-wrap">
            <div class="essence-banner-image bg-header">

            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title" style="color: #ffffff">Publicações</h2>
                </div>

                <div class="header-breadcrumb-wrap color-changer1" data-color="#999999" data-c-target="span, li">
                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li class="trail-item trail-begin">
                                <a href="{{route('home')}}" rel="home">
                                    <span>Home</span>
                                </a>

                            </li>
                            <li class="trail-item trail-end">
                                <span>Publicações</span>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container page-content">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 publications-list">

                @foreach ($publications as $publication)
                    <div class="col-md-6">
                        <div class="row g-0 border-bottom overflow-hidden pb-4 ">
                            <div class="col-4">
                                <img class="card-img-right flex-auto d-none d-md-block img-fluid" data-src="holder.js/200x250?theme=thumb"
                                     alt="Thumbnail [200x250]" src="{{ $publication->image('cover', 'mobile') }}"
                                     data-holder-rendered="true" >
                            </div>

                            <div class="col-8 px-4 d-flex flex-column">
                                <strong>{{ date("d/m/Y", strtotime($publication->publish_start_date)) }}</strong>
                                <h3 class="my-2">{{ $publication->title }}</h3>
                                <div class="mt-auto d-flex justify-content-end ">
                                    <a href="{{ route('publications.show', ['slug' => $publication->slug]) }}" class="btn btn-bricks px-5">
                                        Leia Mais
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </main>
@endsection
