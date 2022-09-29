@extends('layouts.layout')
@section('main')
    <main>
        <div class="header-banner-wrap">
            <div class="essence-banner-image bg-header">

            </div>
            <div class="tr-content-title-banner">
                <div class="header-title-wrap">
                    <h2 class="header-title">{{ $clipping->title }}</h2>
                </div>
                <div class="header-breadcrumb-wrap color-changer1" data-color="#999999" data-c-target="span, li">
                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li class="trail-item trail-begin">
                                <a href="{{ route('home') }}" rel="home">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="trail-item trail-begin">
                                <a href="{{ route('clippings') }}">
                                    <span>Na Mídia</span>
                                </a>
                            </li>
                            <li class="trail-item trail-end">
                                <span>{{ $clipping->title }}</span>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div id="main-container" class="main-container p-5">
            <div class="site-content-inner container">

                <div class="row">
                    <div id="primary" class="content-area  col-xs-12 no-sidebar">
                        <main id="main" class="site-main">
                            <div class="blog-single">
                                <article id="post-1659"
                                    class="blog-item post-1659 essential_grid type-essential_grid status-publish has-post-thumbnail hentry tag-70 essential_grid_category-fevereiro">
                                    <div class="entry-content content-post">
                                        <!-- AddThis Sharing Buttons above -->
                                        <div class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">

                                                        <div class="vc_tta-container" data-vc-action="collapse">
                                                            <div
                                                                class="vc_general vc_tta vc_tta-tabs vc_tta-color-grey vc_tta-style-classic vc_tta-shape-rounded vc_tta-spacing-1 vc_tta-tabs-position-left vc_tta-controls-align-left ">

                                                                <div class="vc_tta-tabs-container">
                                                                    <ul class="vc_tta-tabs-list">
                                                                        @foreach ($clipping->clippings as $clippingAccordion)
                                                                            <li class="vc_tta-tab @if ($clippingAccordion['id'] == $clipping->clippings[0]['id']) vc_active @endif"
                                                                                data-vc-tab=""><a
                                                                                    href="#{{ $clippingAccordion['id'] }}"
                                                                                    data-vc-tabs=""
                                                                                    data-vc-container=".vc_tta"><span
                                                                                        class="vc_tta-title-text">{{ $clippingAccordion['name'] }}
                                                                                    </span></a></li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                                <div class="vc_tta-panels-container">
                                                                    @foreach ($clipping->clippings as $clippingAccordion)
                                                                        <div class="vc_tta-panels">
                                                                            <div class="vc_tta-panel @if ($clippingAccordion['id'] == $clipping->clippings[0]['id']) vc_active @endif"
                                                                                id="{{ $clippingAccordion['id'] }}"
                                                                                data-vc-content=".vc_tta-panel-body">
                                                                                <!--vc_active!-->
                                                                                <div class="vc_tta-panel-heading">
                                                                                    <h4 class="vc_tta-panel-title"><a
                                                                                            href="#{{ $clippingAccordion['id'] }}"
                                                                                            data-vc-accordion=""
                                                                                            data-vc-container=".vc_tta-container"><span
                                                                                                class="vc_tta-title-text">{{ $clippingAccordion['name'] }}</span></a>
                                                                                    </h4>
                                                                                </div>

                                                                                <div class="vc_tta-panel-body"
                                                                                    style="">
                                                                                    <div
                                                                                        class="wpb_text_column wpb_content_element ">
                                                                                        <div class="wpb_wrapper">
                                                                                            {!! $clippingAccordion['description'] !!}
                                                                                            <br><br>
                                                                                            <a
                                                                                                href="{{ $clippingAccordion['link'] }}">Confira
                                                                                                a matéria
                                                                                                na íntegra</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
