<!DOCTYPE html>
<html>

<head></head>

<body>
    @extends('layout.bahagia')

    @section('title', 'Edit Data Pegawai')
    @section('judulhalaman', 'Edit Data Pegawai')

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
                    <table>
                        <tr>
                        <tr>Nama </tr>
                        <th><input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"></th>
                        </tr>
                    </table>
                    <table>
                        <tr>
                        <tr>Jabatan </tr>
                        <th><input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"></th>

                        </tr>
                    </table>
                    <table>
                        <tr>
                        <tr>Umur </tr>
                        <th><input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"></th>

                        </tr>
                    </table>
                    <table>
                        <tr>
                        <tr>Alamat </tr>
                        <th><textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> </th>

                        </tr>
                    </table>
                    <input type="submit" value="Simpan Data" class="btnsimpandata">
                </form>
            @endforeach
        </div>
    @endsection
</body>

</html>
