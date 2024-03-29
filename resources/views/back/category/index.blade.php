@extends('back.layout.template')

@section('title', 'List Category Admin')


@section('content')
    {{-- ! isi dari section harus sesuai dengan yang ada di @yield yang ada di folder back->layout->template --}}

    {{-- ? Content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Categories</h1>
        </div>
        <div class="mt-3">
            <button class="btn btn-success mb-2 d-flex align-center" data-bs-toggle="modal" data-bs-target="#modalCreate"><i class="bi bi-plus-circle" style="margin-right: 5px"></i>Create</button>

            @if ($errors->any())
                <div class="my-3">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            @if (session('success'))
                <div class="my-3">
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Created At</th>
                        <th>Function</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $item)
                        <tr class="align-center">
                            <td>{{ $loop->iteration }}</td>
                            <td style="align-items: center justify-content: center">{{ $item->name }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->created_at }}</td>
                            <div class="text-center">
                                <td>
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                         data-bs-target="#modalUpdate{{ $item->id }}"><i class="bi bi-pencil-square" title="Edit"></i></button>  {{--? Button Edit--}}
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalDelete{{ $item->id }}"><i class="bi bi-trash" title="Delete"></i></button> {{--? Button Delete--}}
                                </td>
                            </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal Create -->
        @include('back.category.create-modal')

        <!-- Modal Update-->
        @include('back.category.update-modal')

        <!-- Modal Delete-->
        @include('back.category.delete-modal')

    </main>
@endsection
