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
        <form action="/perkenalan/update/{{ $perkenalan->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul_singkat" class="form-label">judul singkat</label>
                <input type="text" class="form-control" id="judul_singkat" name="judul_singkat"
                    placeholder="masukan judul singkat" value="{{ $perkenalan->judul_singkat }}">
            </div>
            <div class="mb-3">
                <label for="penjelasan_singkat" class="form-label">penjelasan singkat</label>
                <input type="text" class="form-control" id="penjelasan_singkat" name="penjelasan_singkat" placeholder="masukan penjelasan singkat"
                    value="{{ $perkenalan->penjelasan_singkat }}">
            </div>
            <div class="form-group">
                <label for="gambar">gambar</label>
                <input type="file" name="gambar" class="form-control" onchange="GambarFoto(event)"><img
                    src="{{ Storage::url($perkenalan->gambar) }}" width="100px" target="_blank"
                    id="gambar">
            </div>
            <input type="submit" value="submit" class="btn btn-primary">
        </form>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
<script>
    // kondisi pertama pada saat halaman di load, tampilkan gambar di tag <img> dengan data gambar pada database
    // panggil id gambar dari tag <img>, ini untuk menampilkan gambarnya
    const gambar_foto = document.getElementById('gambar');
    gambar_foto.src = "/public/gambar"

    function GambarFoto(event) {
        // ambil data eventnya
        const eventGambar = event.target.files;
        // kemudian tambahkan attribut src nya seperti <img src="link disini dari javacript">
        // atur src dengan nama file yang ada di filegambar[0]
        gambar_foto.src = URL.createObjectURL(eventGambar[0]);
        // // kemudian  
        gambar_foto.style.display = "block";
    }
</script>
@endsection
