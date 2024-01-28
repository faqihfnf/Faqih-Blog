@extends('front.layout.template')

@push('meta-seo')
<meta name="description" content="tentang faqih Blog Faqih Nur Fahmi berisi tulisan berkaitan dengan ilmu islam berdasarkan al-quran dan sunnah dengan pemahaman sahabat dan salafus shalih">
<meta name="keyword" content="tentang faqih nur fahmi, tentang blog islam, tentang kajian islam, tentang kajian sunnah, kitab ulama, fatwa ulama, nasihat islam, hijrah">
<meta property="og:title" content="tentang Faqih Nur Fahmi Blog">
<meta property="og:url" content="{{url()->current()}}">
<meta property="og:side_name" content="tentang Faqih Nur Fahmi Blog">
<meta property="og:description" content="tentang Faqih Nur Fahmi berisi tulisan berkaitan dengan ilmu islam berdasarkan al-quran dan sunnah dengan pemahaman sahabat dan salafus shalih">
<meta property="og:image" content="{{ asset('front/img/logo.jpg') }}">
@endpush

@section('title', 'About - Faqih Nur Fahmi Blog')

@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="card mb-4 shadow" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="500">
                    <a href="{{asset('front/img/logo.jpg')}}"><img class="card-img-top about-img" src="{{asset('front/img/logo.jpg')}}" alt="About Faqih Nur Fahmi Blog" /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ date('d M Y') }}</div>
                        <h2 class="card-title">About Me</h2>
                        <p class="card-text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ducimus dolor adipisci sed
                            laborum ad expedita inventore mollitia, praesentium velit aperiam. Earum mollitia debitis
                            cupiditate!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ducimus dolor adipisci sed
                            laborum ad expedita inventore mollitia, praesentium velit aperiam. Earum mollitia debitis
                            cupiditate!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ducimus dolor adipisci sed
                            laborum ad expedita inventore mollitia, praesentium velit aperiam. Earum mollitia debitis
                            cupiditate!</p>
                        </p>
                    </div>
                </div>
            </div>
            @include('front.layout.side-widget')
        </div>

    </div>
@endsection
