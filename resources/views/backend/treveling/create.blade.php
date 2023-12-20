@extends('backend.index')
@section('content')
<form action="/treveling/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content-wrapper">
        <div class="ml-3">
            <div class="mb-3">
                <label for="nama_tempat" class="form-label">nama tempat</label></label>
                <input type="text" class="form-control" id="nama_tempat" name="nama_tempat" placeholder="masukan nama tempat">
            </div>
        </div>
        <div class="ml-3">
            <div class="mb-3">
                <label for="penjelasan_singkat" class="form-label">penjelasan singkat</label></label>
                <input type="text" class="form-control" id="penjelasan_singkat" name="penjelasan_singkat" placeholder="masukan penjelasan singkat">
            </div>
        </div>
        <div class="ml-3">
            <div class="mb-3">
                <label for="harga" class="form-label">harga</label></label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="masukan harga">
            </div>
        </div>
        <div class="form-group">
            <label for="gambar">gambar</label>
            <input type="file" class="form-control" placeholder="Insert the book cover" name="gambar"
                onchange="GambarFoto(event)">
            <img id="gambar" width="100px" height="150px" class="rounded">
        </div>
        <input type="submit" value="submit" class="btn btn-primary ml-3">
    </div>
</form>
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
