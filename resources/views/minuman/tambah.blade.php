@extends('layout.bahagia')
@section('title', 'Tambah Data Minuman')
@section('judulhalaman', 'Tambah Data Minuman')
@section('konten')


<div class="konten">
<div>
    <a href="/minuman" class="btn btn-primary btn-sm my-2 mb-3">Kembali</a>
</div>

    <form action="/minuman/store" method="post">
        {{ csrf_field() }}
        <table>
            <tr>
            <tr>Merk </tr>
            <th><input type="text" name="merk" required="required"> </th>

            </tr>
        </table>
        <table>
            <tr>
            <tr>Stock </tr>
            <th><input type="number" name="stock" required="required"> </th>

            </tr>
        </table>

            <div>
                <label class="form-label">Tersedia</label>
            </div>
            <div class="labeleditabsen">
            <div>
                <input class="form-check-input" type="radio" id="tersedia" name="tersedia" value="Y" checked>
                <label class="form-check-label" for="tersedia"> Ya </label>
            </div>
            <div>
                <input class="form-check-input" type="radio" id="tidaktersedia" name="tersedia" value="N">
                <label class="form-check-label" for="tidaktersedia"> Tidak </label>
            </div>
            </div>

            {{-- Simpan Data --}}

        <div> <input class="btnsimpandata" type="submit" value="Simpan Data">
    </form>
</div>

    @endsection
