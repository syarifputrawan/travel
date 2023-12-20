@extends('backend.index')
@section('content')
<form action="/team/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content-wrapper">
        <div class="form-group">
            <label for="foto">foto</label>
            <input type="file" class="form-control" placeholder="masukan foto" name="foto"
                onchange="GambarFoto(event)">
            <img id="foto" width="100px" height="150px" class="rounded">
        </div>
        <div class="ml-3">
            <div class="mb-3">
                <label for="nama" class="form-label">nama</label></label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama">
            </div>
        </div>
        <div class="ml-3">
            <div class="mb-3">
                <label for="jabatan" class="form-label">jabatan</label></label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="masukan jabatan">
            </div>
        </div>
        <input type="submit" value="submit" class="btn btn-primary ml-3">
    </div>
</form>
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
