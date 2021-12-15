<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<body>

    @extends('layout.bahagia')

    @section('title', 'Tambah Data Absen')
    @section('judulhalaman', 'Tambah Data Absen')

    @section('konten')

        <div class=" konten">
            <p> <a href="/absen"> Kembali</a></p>

            <form action="/absen/store" method="post">
                {{ csrf_field() }}

                <div class="idpegawai1">
                    IDPegawai <select name="idpegawai">
                        @foreach ($pegawai as $p)
                            <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="dtpickerdemo" class="control-label">Tanggal :</label>
                    <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                        <input type='text' class="col-sm-6 form-control" name="tanggal" required="required" id="tanggall" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: 'YYYY-MM-DD',
                            showTodayButton: false,
                            locale: 'id',
                            "defaultDate": new Date(),
                        });
                    });
                </script>

                <div class="labeleditabsen">
                    Status <br />
                    <input type="radio" id="html" name="status" value="I">
                    <label for="html">Izin</label><br>
                    <input type="radio" id="css" name="status" value="S" checked="checked">
                    <label for="css">Sakit</label><br>
                    <input type="radio" id="javascript" name="status" value="A">
                    <label for="javascript">Alpha</label>
                </div>
                <p><input type="submit" value="Simpan Data" class="btnsimpandata"></p>
            </form>
        </div>
    @endsection
</body>

</html>
