<!DOCTYPE html>
<html>

<head>
    <title>Tabel Tugas Query Builder</title>
</head>

<body>

    @extends('layout.bahagia')

    @section('title', 'Data Pendapatan ')
    @section('judulhalaman', 'Data Pendapatan Pegawai')

    @section('konten')
        <!-- Page content -->
        <div class=" konten">
            <h2>Data Pendapatan Pegawai</h2>

            <a href="/pendapatan/tambah"> + Tambah data Baru</a>

            <br />
            <br />

            <table border="1">
                <tr>
                <tr>
                    <th>Nama Pegawai</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Jumlah Gaji</th>
                    <th>Jumlah Tunjangan</th>
                    <th>Opsi</th>
                </tr>
                </tr>
                @foreach ($pendapatan as $p)
                    <tr>
                        <td>{{ $p->pegawai_nama }}</td>
                        <td>{{ $p->Bulan }}</td>
                        <td>{{ $p->Tahun }}</td>
                        <td>{{ $p->Gaji }}</td>
                        <td>{{ $p->Tunjangan }}</td>
                        <td>
                            <a href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
                            |
                            <a href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $pendapatan->links() }}
        </div>
    @endsection

</body>

</html>
