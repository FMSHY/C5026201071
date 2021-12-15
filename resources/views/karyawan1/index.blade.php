
<!DOCTYPE html>
<html>

<head>
</head>

<body>
    @extends('layout.bahagia')

    @section('title', 'EAS')
    @section('judulhalaman', 'List Data karyawan')

    @section('konten')
        <!-- Page content -->
        <div class=" konten">
            <h2>Data karyawan</h2>

            <a href="/karyawan1/add"> + Tambah karyawan Baru</a>

            <br />
            <br />

            <table border="1">
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Pangkat</th>
                    <th>Gaji</th>
                    <th>Opsi</th>
                </tr>
                @foreach($karyawan1 as $k)
                    <tr>
                        <td>{{ $k->NIP }}</td>
                        <td>{{ $k->Nama }}</td>
                        <td>{{ $k->Pangkat }}</td>
                        <td>{{ $k->Gaji }}</td>
                        <td>
                            <a href="/karyawan1/hapus/{{ $k->NIP }}">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endsection
</body>

</html>

