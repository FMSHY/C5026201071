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

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="number" name="idpegawai" required="required"> <br/>
		Bulan <input type="number" name="bulan" required="required"> <br/>
        Tahun <input type="number" name="tahun" required="required"> <br/>
        Gaji <input type="number" name="gaji" required="required"> <br/>
		Tunjangan <input type="number" name="tunjangan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
