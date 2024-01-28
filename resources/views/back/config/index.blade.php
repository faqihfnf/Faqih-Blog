@extends('back.layout.template')

@section('title', 'List Config Admin')


@section('content')
    {{-- ! isi dari section harus sesuai dengan yang ada di @yield yang ada di folder back->layout->template --}}

    {{-- ? Content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Config</h1>
        </div>
        <div class="mt-3">
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
                        <th>Value</th>
                        <th>Function</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($config as $item => $key)
                        <tr class="align-center">
                            <td>{{ $config->firstItem() + $item }}</td>
                            <td>{{ $key->name }}</td>
                            <td>{{ $key->value }}</td>
                            <div class="text-center">
                                <td>
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modalUpdate{{ $key->id }}"><i class="bi bi-pencil-square"
                                            title="Edit"></i></button> {{-- ? Button Edit --}}
                                </td>
                            </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{ $config->links() }}
            </div>
        </div>
        @include('back.config.update-modal')
    </main>
@endsection
