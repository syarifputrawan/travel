@extends('backend.index')
@section('content')
<div class="content-wrapper">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>           
    @endif
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{$errors->first()}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>           
    @endif
<div class="ml-3"> <br>
    <a href="/treveling/create" class="btn btn-primary mb-3">tambah data</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">gambar</th>
            <th scope="col">nama tempat</th>
            <th scope="col">penjelasan singkat</th>
            <th scope="col">harga</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($treveling as $item)
          <tr>
            <th scope="row">1</th>
            <td><img src="{{ Storage::url($item->gambar) }}" height="150px" target="_blank"></td>
            <td>{{ $item->nama_tempat }}</td>
            <td>{{ $item->penjelasan_singkat }}</td>
            <td>{{ $item->FormatRupiah('harga') }}</td>
            <td>
                <a href="/treveling/edit/{{$item->id}}" class="btn btn-success">edit</a>
                <a href="/treveling/destroy/{{$item->id}}" class="btn btn-danger">delate</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
</div>
  @endsection