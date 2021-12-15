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
            <a href="/minuman"> Kembali</a>

            <br />
            <br />

            @foreach ($minuman as $m)
                    {{ csrf_field() }}
                    <table border="1">
                        <tr>
                            <th>Kode</th>
                            <th>Merk</th>
                            <th>Stock</th>
                            <th>Tersedia</th>
                        </tr>
                        @foreach ($minuman as $m)
                            <tr>
                                <td>{{ $m->kodeminuman }}</td>
                                <td>{{ $m->merkminuman }}</td>
                                <td>{{ $m->stockminuman }}</td>
                                <td>{{ $m->tersedia }}</td>
                            </tr>
                        @endforeach
                    </table>
                </form>
            @endforeach
        </div>
    @endsection
</body>

</html>
