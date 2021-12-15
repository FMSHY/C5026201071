<!DOCTYPE html>
<html>

<head>
</head>

<body>
    @extends('layout.bahagia')

    @section('title', 'Tambah Data Pegawai')
    @section('judulhalaman', 'Tambah Data Pegawai')

    @section('konten')
        <!-- Page content -->
        <div class=" konten">
            <a href="/pegawai"> Kembali</a>

            <br>

            <br>

            <form action="/pegawai/store" method="post">
                {{ csrf_field() }}
                <table>
                    <tr>
                    <tr>Nama </tr>
                    <th><input type="text" name="nama" required="required"></th>
                    </tr>
                </table>
                <table>
                    <tr>
                    <tr>Jabatan </tr>
                    <th><input type="text" name="jabatan" required="required"></th>

                    </tr>
                </table>
                <table>
                    <tr>
                    <tr>Umur </tr>
                    <th><input type="number" name="umur" required="required"> </th>

                    </tr>
                </table>
                <table>
                    <tr>
                    <tr>Alamat </tr>
                    <th><input type="text" name="alamat" required="required"> </th>

                    </tr>
                </table>
                <input type="submit" value="Simpan Data" class="btnsimpandata">
            </form>
        </div>
    @endsection
</body>

</html>
