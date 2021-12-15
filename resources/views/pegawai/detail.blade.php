<!DOCTYPE html>
<html>

<head>
</head>

<body>
    @extends('layout.bahagia')

    @section('title', 'Detail Data Pegawai')
    @section('judulhalaman', 'Detail Data Pegawai')

    @section('konten')
        <!-- Page content -->
        <div class=" konten">
            <a href="/pegawai"> Kembali</a>

            <br />
            <br />

            @foreach ($pegawai as $p)
                <form action="/pegawai/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
                    <table border="1">
                        <tr>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                        </tr>
                        @foreach ($pegawai as $p)
                            <tr>
                                <td>{{ $p->pegawai_nama }}</td>
                                <td>{{ $p->pegawai_jabatan }}</td>
                                <td>{{ $p->pegawai_umur }}</td>
                                <td>{{ $p->pegawai_alamat }}</td>
                            </tr>
                        @endforeach
                    </table>
                </form>
            @endforeach
        </div>
    @endsection
</body>

</html>
