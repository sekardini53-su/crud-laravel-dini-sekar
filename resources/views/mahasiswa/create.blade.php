<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <a href="{{ route('mahasiswa.index') }}">Kembali</a>
    <br><br>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf  <div>
            <label>NIM:</label><br>
            <input type="text" name="nim" value="{{ old('nim') }}">
            @error('nim') <div style="color: red;">{{ $message }}</div> @enderror
        </div>
        <br>
        
        <div>
            <label>Nama:</label><br>
            <input type="text" name="nama" value="{{ old('nama') }}">
            @error('nama') <div style="color: red;">{{ $message }}</div> @enderror
        </div>
        <br>

        <div>
            <label>Jurusan:</label><br>
            <input type="text" name="jurusan" value="{{ old('jurusan') }}">
            @error('jurusan') <div style="color: red;">{{ $message }}</div> @enderror
        </div>
        <br>

        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>