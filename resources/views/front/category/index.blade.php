@extends('front.layout.template')

@push('meta-seo')
<meta name="description" content=" kategori Blog Faqih Nur Fahmi berisi tulisan berkaitan dengan ilmu islam berdasarkan al-quran dan sunnah dengan pemahaman sahabat dan salafus shalih">
<meta name="keyword" content="kategori blog faqih nur fahmi, blog islam, kajian islam, kajian sunnah, kitab ulama, fatwa ulama, nasihat islam, hijrah">
<meta property="og:title" content="kategori {{ $category . ' - Faqih Nur Fahmi Blog'}}">
<meta property="og:url" content="{{url()->current()}}">
<meta property="og:side_name" content="kategori Faqih Nur Fahmi Blog">
<meta property="og:description" content="kategori Blog Faqih Nur Fahmi berisi tulisan berkaitan dengan ilmu islam berdasarkan al-quran dan sunnah dengan pemahaman sahabat dan salafus shalih">
<meta property="og:image" content="{{ asset('front/img/logo.jpg') }}">
@endpush

@section('title', 'Category ' . $category . '- Faqih Nur Fahmi')

@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="m-2">
            <form action="{{ route('search') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="Enter Search Article...">
                    <button class="btn btn-primary" id="button-search" type="submit">Search</button>
                </div>
            </form>
            <p>Showing articles with category: <b><i>{{ $category }}</b></i>
            </p>
        </div>
        <div class="row">
            @forelse ($articles as $item)
                <div class="col-lg-4" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <!-- Blog post-->
                    <div class="card mb-4 shadow">
                        <a href="{{ url('post/' . $item->slug) }}"><img class="card-img-top post-img"
                                src="{{ asset('storage/back/' . $item->img) }}" alt="..." /></a>
                        <div class="card-body card-height">
                            <div class="small text-muted d-flex justify-content-between">
                                <div>{{ $item->created_at->format('d M Y') }} || Author :
                                {{ $item->User->name }}</div>
                                <div><a
                                        href="{{ url('category/' . $item->Category->slug) }}">{{ $item->Category->name }}</a>
                                </div>
                            </div>
                            <h1 class="card-title h4">{{ $item->title }}</h1>
                            <p class="card-text">{{ Str::limit(strip_tags($item->desc), 100, '...') }}</p>
                        </div>
                        <div class="m-3 d-flex justify-content-end">
                            <a class="btn btn-primary" href="{{ url('post/' . $item->slug) }}">Read more →</a>
                        </div>
                    </div>
                </div>
            @empty
                <h3><b>Article Not Found!! </b></h3>
            @endforelse
            <div class="pagination justify-content-center my-4">
                {{ $articles->links() }}
            </div>
        </div>
    </div>
@endsection
