<!DOCTYPE html>
<html>

<head>
    <title>Tabel Tugas Query Builder</title>
</head>

<body>
    @extends('layout.bahagia')

    @section('title', 'Edit Data Pendapatan')
    @section('judulhalaman', 'Edit Pendapatan')

    @section('konten')
        <!-- Page content -->
        <div class=" konten">
            <h2>Data Pendapatan</h2>

            <a href="/pendapatan"> Kembali</a>

            <br />
            <br />

            @foreach ($pendapatan as $p)
                <form action="/pendapatan/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->ID }}"> <br />
                    <table>
                        <tr>
                        <tr>Nama Pegawai </tr>
                        <th><input type="number" required="required" name="ID" value="{{ $p->IDPegawai }}"></th>
                        </tr>
                    </table>
                    <table>
                        <tr>
                        <tr>Bulan </tr>
                        <th><input type="number" required="required" name="bulan" value="{{ $p->Bulan }}"> </th>

                        </tr>
                    </table>
                    <table>
                        <tr>
                        <tr>Tahun </tr>
                        <th><input type="number" required="required" name="tahun" value="{{ $p->Tahun }}"> </th>

                        </tr>
                    </table>
                    <table>
                        <tr>
                        <tr>Gaji </tr>
                        <th><input type="number" required="required" name="gaji" value="{{ $p->Gaji }}"> </th>

                        </tr>
                    </table>
                    <table>
                        <tr>
                        <tr>Tunjangan </tr>
                        <th> <input type="number" required="required" name="tunjangan" value="{{ $p->Tunjangan }}"> </th>

                        </tr>
                    </table>
                    <input type="submit" value="Simpan Data" class="btnsimpandata">
                </form>
            @endforeach
        </div>
    @endsection

</body>

</html>
