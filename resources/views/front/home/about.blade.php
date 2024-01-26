@extends('front.layout.template')

@section('title', 'About - Faqih Nur Fahmi Blog')

@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="card mb-4 shadow">
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
