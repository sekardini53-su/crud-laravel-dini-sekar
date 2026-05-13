<h1>Daftar Mahasiswa</h1>
<a href="{{ route('mahasiswa.create') }}">Tambah Data</a>

<table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>
    @foreach ($mahasiswas as $mhs)
    <tr>
        <td>{{ $mhs->nim }}</td>
        <td>{{ $mhs->nama }}</td>
        <td>
            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>