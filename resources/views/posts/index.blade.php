@extends( 'layouts.layout')

@section('main')
<section class="">
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
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <!-- <strong class="d-inline-block mb-2 text-success">Design</strong> !-->
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">{{$post->title}}</a>
                    </h3>
                    <div class="mb-1 text-muted">{{ $post->publish_start_date->format('d/m/Y') }}</div>
                    <!-- <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p> !-->
                    <a href="#">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="{{$post->image('cover', 'mobile')}}" data-holder-rendered="true" style="width: 200px; height: 250px;">
            </div>
        </div>
        @endforeach


    </div>


</section>
@stop