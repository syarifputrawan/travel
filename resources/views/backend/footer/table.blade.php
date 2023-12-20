@extends('backend.index')
@section('content')
    <div class="content-wrapper">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $errors->first() }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="ml-3"> <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">alamat</th>
                        <th scope="col">nomor hp</th>
                        <th scope="col">email</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($footer as $item)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->nomor_hp }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="/footer/edit/{{ $item->id }}" class="btn btn-success">edit</a>
                                <a href="/footer/destroy/{{ $item->id }}" class="btn btn-danger">delate</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
