<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<body>

    @extends('layout.bahagia')

    @section('title', 'Data Absen')
    @section('judulhalaman', 'Data Absen Pegawai')

    @section('konten')

        <div class="konten">
            <h2>Data Absensi Pegawai</h2>

            <a href="/absen/add"> + Tambah Absensi</a>

            <br />
            <br />

            <table border="1">
                <tr>
                    <th>Nama Pegawai</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
                @foreach ($absen as $a)
                    <tr>
                        <td>{{ $a->pegawai_nama }}</td>
                        <td>{{ $a->Tanggal }}</td>
                        <td>{{ $a->Status }}</td>
                        <td>
                            <a href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
                            |
                            <a href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <p>
                Keterangan Status: <br>
                I : Izin <br>
                S : Sakit <br>
                A : Alpha <br>
            </p>
        </div>
    @endsection
</body>

</html>
