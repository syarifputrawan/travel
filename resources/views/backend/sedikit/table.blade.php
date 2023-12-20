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
                        <th scope="col">judul kami</th>
                        <th scope="col">deskripsi singkat</th>
                        <th scope="col">gambar</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sedikit as $item)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $item->judul_kami }}</td>
                            <td>{{ $item->deskripsi_singkat }}</td>
                            <td><img src="{{ Storage::url($item->gambar) }}" height="150px" target="_blank"></td>
                            <td>
                                <a href="/sedikit/edit/{{ $item->id }}" class="btn btn-success">edit</a>
                                <a href="/sedikit/destroy/{{ $item->id }}" class="btn btn-danger">delate</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
