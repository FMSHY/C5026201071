<!DOCTYPE html>
<html>

<head>
</head>

<body>
    @extends('layout.bahagia')

    @section('title', 'List Data Pegawai')
    @section('judulhalaman', 'List Data Pegawai')

    @section('konten')
        <!-- Page content -->
        <div class=" konten">
            <h2>Data Pegawai</h2>

            <form action="/pegawai/cari" method="GET">
                <input type="text" class="col-sm-2 form-control" name="cari"
                    placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
                <input type="submit" class="btn btn-default" value="CARI">
            </form>

            <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

            <br />
            <br />

            <table border="1">
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
                @foreach ($pegawai as $p)
                    <tr>
                        <td>{{ $p->pegawai_nama }}</td>
                        <td>{{ $p->pegawai_alamat }}</td>
                        <td>
                            <a href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
                            |
                            <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                            |
                            <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $pegawai->links() }}
        </div>
    @endsection
</body>

</html>
