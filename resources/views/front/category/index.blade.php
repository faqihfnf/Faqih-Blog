@extends('front.layout.template')

@section('title', 'Category ' . $category . '- Faqih Nur Fahmi')

@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="mb-4">
            <form action="{{ route('search') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="Enter Search Article...">
                    <button class="btn btn-primary" id="button-search" type="submit">Search</button>
                </div>
            </form>
        </div>

            <p>Showing articles with category: <b><i>{{ $category }}</b></i>
            </p>

        <div class="row">
            @forelse ($articles as $item)
                <div class="col-lg-4">
                    <!-- Blog post-->
                    <div class="card mb-4 shadow">
                        <a href="{{ url('post/' . $item->slug) }}"><img class="card-img-top post-img"
                                src="{{ asset('storage/back/' . $item->img) }}" alt="..." /></a>
                        <div class="card-body card-height">
                            <div class="small text-muted d-flex justify-content-between">
                                <div>{{ $item->created_at->format('d M Y') }}</div>
                                <div><a
                                        href="{{ url('category/' . $item->Category->slug) }}">{{ $item->Category->name }}</a>
                                </div>
                            </div>
                            <h1 class="card-title h4">{{ $item->title }}</h1>
                            <p class="card-text">{{ Str::limit(strip_tags($item->desc), 100, '...') }}</p>
                            <a class="btn btn-primary" href="{{ url('post/' . $item->slug) }}">Read more →</a>
                        </div>
                    </div>
                </div>
            @empty
                <h3><b>Article Not Found!!  </b></h3>
            @endforelse
            <div class="pagination justify-content-center my-4">
                {{ $articles->links() }}
            </div>
        </div>
    </div>
@endsection
