@extends('front.layout.template')

@section('title', $article->title . '- Faqih Nur Fahmi')

@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="1000">
                <!-- Featured blog post-->
                <div class="card mb-4 shadow">
                    <a href="{{ url('post/' . $article->slug) }}"><img class="card-img-top single-img"
                            src="{{ asset('storage/back/' . $article->img) }}" alt="{{ $article->title }}" /></a>
                    <div class="card-body">
                        <div class="small text-muted d-flex justify-content-between">
                            <div class="">
                                <span class="ml-2">{{ $article->created_at->format('d M Y') }} ||   </span>
                                <span class="ml-2 bi bi-eye"> {{ $article->views }}</span>
                            </div>
                            <span class="ml-2"><a href="{{ url('category/' . $article->Category->slug) }}">{{ $article->Category->name }}</a></span>
                        </div>
                        <h1 class="card-title">{{ $article->title }}</h1>
                        <p class="card-text">{!! $article->desc !!}</p>
                    </div>
                </div>
            </div>
            @include('front.layout.side-widget')
        </div>
    </div>




    </div>
@endsection
