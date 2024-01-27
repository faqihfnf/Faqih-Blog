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
                            <div>
                                <span class="ml-2">{{ $article->created_at->format('d M Y') }} || Author :
                                    {{ $article->User->name }} || </span>
                                <span class="ml-2 bi bi-eye"> {{ $article->views }}</span>
                            </div>
                            <span class="ml-2"><a
                                    href="{{ url('category/' . $article->Category->slug) }}">{{ $article->Category->name }}</a></span>
                        </div>
                        <h1 class="card-title">{{ $article->title }}</h1>
                        <p class="card-text">{!! $article->desc !!}</p>
                        <div class="mt-5">
                            <p class="text-bold">Share on:</p>
                            <div class="d-flex gap-2">
                                <a class="btn btn-primary bi bi-facebook" title="Facebook" target="_blank"
                                    href="https://facebook.com/sharer.php?u={{ url()->current() }}"></a>
                                <a class="btn btn-dark text-white bi bi-twitter-x" title="Twitter / X" target="_blank"
                                    href="https://twitter.com/share?ref_src=twsrc%5Etfw"></a>
                                <a class="btn btn-success bi bi-whatsapp" title="Whatsapp" target="_blank"
                                    href="https://api.whatsapp.com/send?text={{ url()->current() }}"></a>
                                <a class="btn btn-info text-white bi bi-linkedin" title="Linkedin" target="_blank"
                                    href="https://www.linkedin.com/sharing/share-offsite/?url={{ url()->current() }}"></a>
                               <button class="btn btn-warning bi bi-link-45deg" title="Copy Link" href="#" onclick="copyToClipboard('{{ url()->current() }}')"></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @include('front.layout.side-widget')
        </div>
    </div>
    </div>
@endsection

<script>
    function copyToClipboard(text) {
        var tempInput = document.createElement('input');
        tempInput.value = text;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);
        
        // (Opsional) Tambahkan log atau notifikasi ke pengguna
        alert('Link telah disalin ke clipboard: ' + text);
    }
</script>
