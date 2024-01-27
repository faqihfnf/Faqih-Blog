                <!-- Side widgets-->
                <div class="col-lg-4" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="500">
                    <!-- Search widget-->
                    <div class="card mb-4 shadow">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <form action="{{ route('search') }}" method="POST">
                                @csrf
                                <div class="input-group">
                                    <input class="form-control" type="text" name="keyword"
                                        placeholder="Enter Search Article...">
                                    <button class="btn btn-primary" id="button-search" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4 shadow">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div>
                                @foreach ($categories as $item)
                                    <span><a href="{{ url('category/' . $item->slug) }}"
                                            class="bg-info badge text-decoration-none">{{ $item->name }} ({{$item->articles_count}})</a></span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4 shadow">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy
                            to use, and feature the Bootstrap 5 card component!</div>
                    </div>

                    <!-- Popular Post -->
                    <div class="card mb-4 shadow">
                        <div class="card-header">Popular Post</div>
                        <div class="card-body">
                            @foreach ($popular_post as $item)
                                {{-- <img src="{{ asset('storage/back/' . $item->img) }}" alt="{{ $item->title }}"> --}}
                                <div>
                                    <a href="{{ url('post/' . $item->slug) }}">{{ $item->title }}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
