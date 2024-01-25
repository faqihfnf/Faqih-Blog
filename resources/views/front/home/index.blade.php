@extends('front.layout.template')

@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="card mb-4 shadow">
                    <a href="{{url('post/'.$latest_post->slug)}}"><img class="card-img-top featured-img"
                            src="{{ asset('storage/back/' . $latest_post->img) }}" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ $latest_post->created_at->format('d M Y') }}</div>
                        <h2 class="card-title">{{ $latest_post->title }}</h2>
                        <p class="card-text">{{ Str::limit(strip_tags($latest_post->desc), 100, '...') }}</p>
                        <a class="btn btn-primary" href="{{url('post/'.$latest_post->slug)}}">Read more →</a>
                    </div>
                </div>
            </div>
            @include('front.layout.side-widget')
        </div>
        <!-- Nested row for non-featured blog posts-->
        <div class="row">
            @foreach ($articles as $item)
                <div class="col-lg-4">
                    <!-- Blog post-->
                    <div class="card mb-4 shadow">
                        <a href="{{url('post/'.$item->slug)}}"><img class="card-img-top post-img" src="{{ asset('storage/back/' . $item->img) }}"
                                alt="..." /></a>
                        <div class="card-body card-height">
                            <div class="small text-muted d-flex justify-content-between">
                                <div>{{ $item->created_at->format('d M Y') }}</div>
                                <div><a
                                        href="{{ url('category/' . $item->Category->slug) }}">{{ $item->Category->name }}</a>
                                </div>
                            </div>
                            <h1 class="card-title h4">{{ $item->title }}</h1>
                            <p class="card-text">{{ Str::limit(strip_tags($item->desc), 100, '...') }}</p>
                            <a class="btn btn-primary" href="{{url('post/'.$item->slug)}}">Read more →</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination justify-content-center my-4">
            {{ $articles->links() }}
        </div>




    </div>
@endsection
