<!DOCTYPE html>
<html>

<head></head>

<body>
    @extends('layout.bahagia')

    @section('title', 'Detail Data Pegawai')
    @section('judulhalaman', 'Edit Data Pegawai')

    @section('konten')
    <!-- Page content -->
    <div class=" konten">

        <a href="/minuman"> Kembali</a>

        <br />
        <br />

        @foreach ($minuman as $m)
            <form action="/minuman/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $m->kodeminuman }}"> <br />
                <table>
                    <tr>
                        <tr>Merk </tr><th><input type="text" required="required" name="merk" value="{{ $m->merkminuman }}"></th>
                    </tr>
                </table>
                <table>
                    <tr>
                        <tr>Stock </tr><th><input type="number" required="required" name="stock" value="{{ $m->stockminuman }}"></th>

                    </tr>
                </table>

                <div>
                    <label class="form-label">Tersedia</label>
                </div>
                <div class="labeleditabsen">
                <div>
                    <input class="form-check-input" type="radio" id="tersedia" name="tersedia" value="Y" @if ($m->tersedia === "Y" ) checked="checked" @endif>
                    <label class="form-check-label" for="tersedia"> Ya </label>
                </div>
                <div>
                    <input class="form-check-input" type="radio" id="tidaktersedia" name="tersedia" value="N" @if ($m->tersedia === "N") checked="checked" @endif>
                    <label class="form-check-label" for="tidaktersedia"> Tidak </label>
                </div>
                </div>

                <input type="submit" value="Simpan Data" class="btnsimpandata">
            </form>
        @endforeach
    </div>
@endsection
</body>

</html>
