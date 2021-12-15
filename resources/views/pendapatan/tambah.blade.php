<!DOCTYPE html>
<html>

<head>
    <title>Tabel Tugas Query Builder</title>
</head>

<body>
    @extends('layout.bahagia')

    @section('title', 'Tambah Data Pendapatan')
    @section('judulhalaman', 'Tambah Data Pendapatan')

    @section('konten')
        <!-- Page content -->
        <div class=" konten">
            <h2>Data Pendapatan</h2>

            <a href="/pendapatan"> Kembali</a>

            <br />
            <br />

            <form action="/pendapatan/store" method="post">
                {{ csrf_field() }}
                <table>
                    <tr>
                    <tr>Nama Pegawai </tr>
                    <th><input type="number" name="ID" required="required"></th>
                    </tr>
                </table>
                <table>
                    <tr>
                    <tr>Bulan </tr>
                    <th><input type="number" name="bulan" required="required"> </th>

                    </tr>
                </table>
                <table>
                    <tr>
                    <tr>Tahun </tr>
                    <th><input type="number" name="tahun" required="required"> </th>

                    </tr>
                </table>
                <table>
                    <tr>
                    <tr>Gaji </tr>
                    <th><input type="number" name="gaji" required="required"> </th>

                    </tr>
                </table>
                <table>
                    <tr>
                    <tr>Tunjangan </tr>
                    <th> <input type="number" name="tunjangan" required="required"> </th>

                    </tr>
                </table>
                <input type="submit" value="Simpan Data" class="btnsimpandata">
            </form>
        </div>
    @endsection
</body>

</html>
