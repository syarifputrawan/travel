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
        <form action="/view_kontak/update/{{ $view_kontak->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul_sambutan" class="form-label">judul sambutan</label>
                <input type="text" class="form-control" id="judul_sambutan" name="judul_sambutan"
                    placeholder="masukan judul sambutan" value="{{ $view_kontak->judul_sambutan }}">
            </div>
            <div class="mb-3">
                <label for="penjelasan_view" class="form-label">penjelasan view</label>
                <input type="text" class="form-control" id="penjelasan_view" name="penjelasan_view" placeholder="masukan penjelasan view"
                    value="{{ $view_kontak->penjelasan_view }}">
            </div>
            <div class="mb-3">
                <label for="penjelasan_treveling" class="form-label">penjelasan treveling</label>
                <input type="text" class="form-control" id="penjelasan_treveling" name="penjelasan_treveling" placeholder="masukan penjelasan treveling"
                    value="{{ $view_kontak->penjelasan_treveling }}">
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
