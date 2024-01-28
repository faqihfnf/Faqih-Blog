@extends('front.layout.template')

@push('meta-seo')
<meta name="description" content="daftar dan semua kategori Blog Faqih Nur Fahmi yang berisi tulisan berkaitan dengan ilmu islam berdasarkan al-quran dan sunnah dengan pemahaman sahabat dan salafus shalih">
<meta name="keyword" content="semua kategori blog faqih nur fahmi,semua kategori blog islam, semua kategori kajian islam, kajian sunnah, kitab ulama, fatwa ulama, nasihat islam, hijrah">
<meta property="og:title" content="semua kategori Faqih Nur Fahmi Blog">
<meta property="og:url" content="{{url()->current()}}">
<meta property="og:side_name" content="semua kategori Faqih Nur Fahmi Blog">
<meta property="og:description" content="daftar dan semua kategori Blog Faqih Nur Fahmi berisi tulisan berkaitan dengan ilmu islam berdasarkan al-quran dan sunnah dengan pemahaman sahabat dan salafus shalih">
<meta property="og:image" content="{{ asset('front/img/logo.jpg') }}">
@endpush

@section('title', 'All Category - Faqih Nur Fahmi')

@section('content')
    <!-- Page content-->
    <div class="container">

        <h3 class="text-center mb-3">All Categories</h3>

        <div class="row">
            @foreach ($category as $item)
                <div class="col-lg-2 mb-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="card shadow" >
                        <div class="card-body">
                            <div class="card-title text-center">
                                <a href="{{ url('category/' . $item->slug) }}" class="text-decoration-none d-grid">
                                    <span class="bi bi-folder-fill text-warning" style="font-size: 85px;"></span>
                                    <span class="text-dark" style="font-weight: bold; font-size: 15px;">{{ $item->name }}
                                        ({{ $item->articles->count() }})
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div>
        {{ $category->links() }}
        </div>
    </div>

@endsection
