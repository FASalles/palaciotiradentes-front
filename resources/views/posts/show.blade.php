@extends( 'layouts.layout')

@section('main')

    <main role="main" class="container">



        <div class="row mt-5 mb-5">
            <div class="col-md-10 offset-md-1 blog-main">

                <!-- blog-post -->
                <div class="blog-post">
                    <img class="img-fluid" src="https://placeimg.com/1000/667/nature">

                    <h2 class="blog-post-title mt-5">Titulo</h2>

                    <h5>Sub-titulo</h5>
                    <p class="blog-post-meta">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at purus id mi tempus blandit vitae lobortis tellus. Praesent hendrerit bibendum ligula, vitae ultricies sem posuere blandit. Morbi maximus ante justo, nec sollicitudin lorem rutrum a. Aenean auctor vulputate tempus. Vestibulum vitae tristique velit, id volutpat libero. Phasellus tincidunt metus non blandit efficitur. Proin a rutrum nunc. Nullam diam enim, sagittis et libero vel, condimentum condimentum lectus. Nam ut aliquet dui.
                    </p>

                    <p>
                    Proin in sodales eros, non consectetur lectus. Integer imperdiet gravida interdum. Proin elementum metus nec libero molestie, sit amet aliquam felis interdum. Suspendisse ligula nisi, congue a aliquam sit amet, mollis in mauris. Sed id velit in sapien luctus porttitor. Donec vitae maximus erat, ut pellentesque sem. Vestibulum aliquet ac diam ac auctor. Phasellus a purus ipsum.
                    </p>

                    <p>
                    Aliquam nulla massa, efficitur quis tempus nec, sagittis a nisi. Cras volutpat sem enim, in porta ante congue eget. Nullam suscipit, tortor vitae placerat egestas, lorem sapien vulputate augue, sed finibus nulla dui quis mi. Cras vitae vehicula leo. Mauris auctor augue sit amet purus tempor, nec dictum magna scelerisque. Donec ultrices ullamcorper scelerisque. Etiam et nisl orci. Nullam condimentum augue tortor, et consequat sem scelerisque eget. Fusce nec finibus dolor. Integer tincidunt metus libero, sed posuere libero finibus et. Nullam tempor dui vel sapien convallis, a porttitor orci lacinia.
                    </p>
                </div>

{{--
                <div class="blog-post">
                    <img class="img-fluid" src="{{$new->image('cover', 'desktop')}}" >

                    <h2 class="blog-post-title mt-5">{{$new->title}}</h2>

                    <h5>{{$new->subtitle}}</h5>
                    <p class="blog-post-meta">
                        {{ $new->publish_start_date->format('d/m/Y') }} | {{ $new->authors }}
                    </p>

                    {!! $new->body !!}
                </div>

                --}}


                <!-- /blog-post -->

            </div>
            <!-- /.blog-main -->


    </main>

@stop
