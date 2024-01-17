@extends('back.layout.template')

@section('title', 'Detail Article Admin')

@section('content')
    {{-- ! isi dari section harus sesuai dengan yang ada di @yield yang ada di folder back->layout->template --}}

    {{-- ? Content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Detail Article</h1>
        </div>

        <div class="mt-3">

            <table class="table table-striped table-bordered">
                <tr>
                    <th width="200px">Title</th>
                    <td>{{ $article->title }}</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>{{ $article->Category->name }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $article->desc }}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        <a href="{{ asset('storage/back/' . $article->img) }}" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('storage/back/' . $article->img) }}" alt="image" width="20%">
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Views</th>
                    <td>{{ $article->views }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    @if ($article->status == 1)
                        <td><span class="badge bg-success">Published</span></td>
                    @else
                        <td><span class="badge bg-danger">Draft</span></td>
                    @endif
                </tr>
                <tr>
                    <th>Published Date</th>
                    <td>{{ $article->publish_date }}</td>
                </tr>
            </table>
            <div class="float-end">
                <a href="{{ url('articles') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </main>
@endsection


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>

<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            processing: true,
            serverside: true,
            ajax: '{{ url()->current() }}',
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'category_id',
                    name: 'category_id'
                },
                {
                    data: 'views',
                    name: 'views'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'publish_date',
                    name: 'publish_date'
                },
                {
                    data: 'button',
                    name: 'button'
                },
            ]
        });
    });
</script>
