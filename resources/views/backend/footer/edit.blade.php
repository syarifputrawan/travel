@extends('backend.index')
@section('content')
<div class="content-wrapper">
<body>
    <div class="container mt-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li> 
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/footer/update/{{ $footer->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="alamat" class="form-label">alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat"
                    placeholder="masukan alamat" value="{{ $footer->alamat }}">
            </div>
            <div class="mb-3">
                <label for="nomor_hp" class="form-label">nomor hp</label>
                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" placeholder="masukan nomor_hp"
                    value="{{ $footer->nomor_hp }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="masukan email"
                    value="{{ $footer->email }}">
            </div>
            <input type="submit" value="submit" class="btn btn-primary">
        </form>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
@endsection
