@extends( 'layouts.layout')

@section('main')
<section class="">

<div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Notícias em destaque
                </h1>
            </div>
        </div>

        @foreach($posts->where('featured','true') as $post)
        <div class="col-md-6">
            <div class="row mt-2 g-0 border-bottom overflow-hidden pb-2">
                <div class="col p-4">
                    <div class="mb-1 text-muted">{{ $post->publish_start_date->format('d/m/Y') }}</div>
                    <h3 class="mb-2">{{$post->title}}</h3>
                    <p class="card-text mb-auto"> {{ $post->description}} </p>
                    <a href="#" class="btn btn-bricks mt-2">Leia Mais</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="{{$post->image('cover', 'mobile')}}" data-holder-rendered="true" style="width: 200px; height: 250px;">
            </div>
        </div>
        @endforeach

    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Notícias
                </h1>
            </div>
        </div>

        @foreach($posts as $post)
        <div class="col-md-6">
            <div class="row mt-2 g-0 border-bottom overflow-hidden pb-2">
                <div class="col p-4">
                    <div class="mb-1 text-muted">{{ $post->publish_start_date->format('d/m/Y') }}</div>
                    <h3 class="mb-2">{{$post->title}}</h3>
                    <p class="card-text mb-auto"> {{ $post->description}} </p>
                    <a href="#" class="btn btn-bricks mt-2">Leia Mais</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="{{$post->image('cover', 'mobile')}}" data-holder-rendered="true" style="width: 200px; height: 250px;">
            </div>
        </div>
        @endforeach

    </div>

</section>
@stop