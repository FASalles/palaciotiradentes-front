@extends( 'layouts.layout')

@section('main')

    <main role="main" class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-10 offset-md-1 blog-main">

                <div class="blog-post">
                    <img class="img-fluid" src="{{$new->image('cover', 'desktop')}}" >

                    <h2 class="blog-post-title mt-5">{{$new->title}}</h2>


                    <h5>{{$new->subtitle}}</h5>
                    <p class="blog-post-meta">
                        {{ $new->publish_start_date->format('d/m/Y') }} | {{ $new->authors }}
                    </p>

                    {!! $new->body !!}

                </div><!-- /.blog-post -->

            </div><!-- /.blog-main -->
<!--
        </div><!-- /.row -->

    </main>

@stop
