@extends('layout.bahagia')

@section('title', 'Edit Data Absen')
@section('judulhalaman', 'Edit Data Absen')

@section('konten')
    <div class="konten">

        <p> <a href="/absen"> Kembali</a></p>

        @foreach ($absen as $a)
            <form action="/absen/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $a->ID }}">
                IDPegawai <select name="idpegawai">
                    @foreach ($pegawai as $p)
                        <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
                <br>
                <div class="form-group">
                    <label for="dtpickerdemo" class="control-label">Tanggal :</label>
                    <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                        <input type='text' class="col-sm-6 form-control" name="tanggal" value="{{ $a->Tanggal }}"
                            required="required" id="tanggall" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span><i class="fa fa-xing" aria-hidden="true"></i>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: 'YYYY-MM-DD hh:mm:ss',
                            showTodayButton: false,
                            locale: 'id',
                            "defaultDate": new Date(),
                        });
                    });
                </script>
                <div class="labeleditabsen">
                    Status <br />
                    <input type="radio" id="html" name="status" value="I" @if ($a->Status === 'I') checked="checked" @endif>
                    <label for="html">Izin</label><br>
                    <input type="radio" id="css" name="status" value="S" @if ($a->Status === 'S') checked="checked" @endif>
                    <label for="css">Sakit</label><br>
                    <input type="radio" id="javascript" name="status" value="A" @if ($a->Status === 'A') checked="checked" @endif>
                    <label for="javascript">Alpha</label>
                </div>
                <p><input type="submit" value="Simpan Data" class="btnsimpandata"></p>
            </form>
        @endforeach
    </div>
@endsection
