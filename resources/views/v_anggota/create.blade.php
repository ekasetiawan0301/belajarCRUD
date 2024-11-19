<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $judul }}</title>
</head>

<body>
  <h3>{{ $judul }}</h3>  
  <form action= "{{ route('kategori.store') }}" method="POST">
    @csrf
    <label>Nama</label><br>
    <input type="text" name="nama" id="" placeholder="Masukan Nama Lengkap" value="{{ old('nama') }}">
    <br><br>

    <label>Hp</label>
    <input type="text" name="hp" id="" placeholder="Masukan nomor HP" value="{{ old('hp') }}">
    <br><br>

    <button type="submit">Simpan</button>
    <a href="{{ route('anggota.index')}}">
        <button type="button">Batal</button>
    </a>

</form>
</body>

</html>