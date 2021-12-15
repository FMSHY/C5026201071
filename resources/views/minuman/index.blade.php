
<!DOCTYPE html>
<html>

<head>
</head>

<body>
    @extends('layout.bahagia')

    @section('title', 'List Minuman')
    @section('judulhalaman', 'List Data Minuman')

    @section('konten')
        <!-- Page content -->
        <div class=" konten">
            <h2>Data Minuman</h2>

            <form action="/minuman/cari" method="GET">
                <input type="text" class="col-sm-2 form-control" name="cari"
                    placeholder="Cari Minuman berdasarkan Merk" value="{{ old('cari') }}">
                <input type="submit" class="btn btn-default" value="CARI">
            </form>

            <a href="/minuman/add"> + Tambah Minuman Baru</a>

            <br />
            <br />

            <table border="1">
                <tr>
                    <th>Kode</th>
                    <th>Merk</th>
                    <th>Stock</th>
                    <th>Tersedia</th>
                    <th>Opsi</th>
                </tr>
                @foreach($minuman as $m)
                    <tr>
                        <td>{{ $m->kodeminuman }}</td>
                        <td>{{ $m->merkminuman }}</td>
                        <td>{{ $m->stockminuman }}</td>
                        <td>{{ $m->tersedia }}</td>
                        <td>
                            <a href="/minuman/detail/{{ $m->kodeminuman }}">Detail</a>
                            |
                            <a href="/minuman/edit/{{ $m->kodeminuman }}">Edit</a>
                            |
                            <a href="/minuman/hapus/{{ $m->kodeminuman }}">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $minuman->links() }}
        </div>
    @endsection
</body>

</html>

