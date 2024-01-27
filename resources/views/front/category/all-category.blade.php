@extends('front.layout.template')

@section('title', 'All Category - Faqih Nur Fahmi')

@section('content')
    <!-- Page content-->
    <div class="container">

        <p>Showing All Category</p>

        <div class="row">
            @foreach ($category as $item)
                <div class="col-lg-2 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <div>
                                    <a href="{{ url('category/' . $item->slug) }}" class="text-decoration-none">
                                        <span class="bi bi-folder-fill text-warning" style="font-size: 75px;"></span>
                                </div>
                                <span class="text-dark">{{ $item->name }}
                                    ({{ $item->articles->count() }})
                                </span>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- {{ $articles->links() }} --}}
    </div>

@endsection
