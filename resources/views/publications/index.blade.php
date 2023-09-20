@extends('layouts.layout')
@section('main')
    <main>
        <div class="header-banner-wrap">
            <div class="essence-banner-image bg-header">

            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title" style="color: #ffffff">Impressos</h2>
                </div>

                <div class="header-breadcrumb-wrap color-changer1" data-color="#999999" data-c-target="span, li">
                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li class="trail-item trail-begin">
                                <a href="{{ route('home') }}" rel="home">
                                    <span>Home</span>
                                </a>

                            </li>
                            <li class="trail-item trail-end">
                                <span>Impressos</span>

                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container pt-5">

            <div class="row publications-list">


                <div class="col-12">
                    @foreach ($publications as $key => $file)
                        <div class="row border-bottom mb-3 pb-3">
                            <div class="col-12 col-lg-3">
                                <img class="img-fluid" src="{{ $file->image('cover', 'default') }}" alt="Card image cap">
                            </div>
                            <div class="col-12 col-lg-9 fs-3 mt-3 mt-lg-0">
                                @if ($file->files->isNotEmpty())
                                    <a href="{{ $file->files[0]->toCmsArray()['src'] }}" class="text-decoration-none"
                                        target="_blank" role="button">
                                        {{ $file->title }}
                                        <h3 class="pt-3" style="color: #B66F6F !important">{!! $file->text !!}</h3>
                                    </a>
                                @endIf
                            </div>
                        </div>
                    @endForEach

                </div>


            </div>
        </div>
    </main>
@endsection
