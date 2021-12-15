<!DOCTYPE html>
<html>

<head>
</head>

<body>
    @extends('layout.bahagia')

    @section('title', 'EAS')
    @section('judulhalaman', 'Tambah Data karyawan')

    @section('konten')
        <!-- Page content -->
        <div class=" konten">
            <a href="/karyawan1"> Kembali</a>

            <br>

            <br>

            <form action="/karyawan1/store" method="post">
                {{ csrf_field() }}
                <table>
                    <tr>
                    <tr>NIP </tr>
                    <th><input type="number" name="nip" required="required"></th>
                    </tr>
                </table>
                <table>
                    <tr>
                    <tr>Nama </tr>
                    <th><input type="text" name="nama" required="required"></th>

                    </tr>
                </table>
                <table>
                    <tr>
                    <tr>Pangkat </tr>
                    <th><input type="text" name="pangkat" required="required"> </th>

                    </tr>
                </table>
                <table>
                    <tr>
                    <tr>Gaji </tr>
                    <th><input type="Number" name="gaji" required="required"> </th>

                    </tr>
                </table>
                <input type="submit" value="Simpan Data" class="btnsimpandata">
            </form>
        </div>
    @endsection
</body>

</html>
