<!DOCTYPE html>
<html>
<head>
	<title>Tabel Tugas Query Builder</title>
</head>
<body>

	<h2>Ariq Bimo Nurputro - 5026201071</h2>
	<h3>Data Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pendapatan_id }}"> <br/>
		IDPegawai <input type="number" name="idpegawai" required="required" value="{{ $p->pendapatan_idpegawai }}"> <br/>
		Bulan <input type="number" name="bulan" required="required" value="{{ $p->pendapatan_bulan }}"> <br/>
        Tahun <input type="number" name="tahun" required="required" value="{{ $p->pendapatan_tahun }}"> <br/>
        Gaji <input type="number" name="gaji" required="required" value="{{ $p->pendapatan_gaji }}"> <br/>
		Tunjangan <input type="number" name="tunjangan" required="required" value="{{ $p->pendapatan_tunjangan }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
