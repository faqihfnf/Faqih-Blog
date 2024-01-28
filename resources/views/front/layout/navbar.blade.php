    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark nav-bg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}" style="font-family: Lobster, cursive; font-size: 25px">Faqih
                Nur Fahmi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link text-white" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ url('/articles') }}">Articles</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ url('/all-category') }}">Categories</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ url('/contact') }}">Contact</a></li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($category_navbar as $item)
                                <li><a class="dropdown-item"
                                        href="{{ url('category/' . $item->slug) }}">{{ $item->name }}</a></li>
                            @endforeach
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ url('/all-category') }}">All Categories</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
