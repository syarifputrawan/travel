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
        <form action="/team/update/{{ $team->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="foto">foto</label>
                <input type="file" name="foto" class="form-control" onchange="GambarFoto(event)"><img
                    src="{{ Storage::url($about->foto) }}" width="100px" target="_blank"
                    id="foto">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">nama</label>
                <input type="text" class="form-control" id="nama" name="nama"
                    placeholder="masukan nama" value="{{ $about->nama }}">
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan"
                    placeholder="masukan jabatan" value="{{ $about->jabatan }}">
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
    const gambar_foto = document.getElementById('foto');
    gambar_foto.src = "/public/foto"

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
