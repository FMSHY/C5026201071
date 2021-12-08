<!DOCTYPE html>
<html>
<head>
	<title>Tabel Tugas Query Builder</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <style>
        body {
            font-family: "Roboto", sans-serif;
            font-size: 16px;
            font-weight: 300;
        }

        /* The sidebar menu */
        .sidenav {
            height: 100%;
            /* Full-height: remove this if you want "auto" height */
            width: 220px;
            /* Set the width of the sidebar */
            position: fixed;
            /* Fixed Sidebar (stay in place on scroll) */
            z-index: 1;
            /* Stay on top */
            top: 0;
            /* Stay at the top */
            left: 0;
            background-color: rgb(255, 255, 255);
            /* Black */
            overflow-x: hidden;
            /* Disable horizontal scroll */
            padding-top: 20px;
            box-shadow: 2px 2px 9px #d4d4d4;
        }

        /* The navigation menu links */
        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: #242424;
            display: block;
        }

        /* When you mouse over the navigation links, change their color */
        .sidenav a:hover {
            background-color: #303030;
            color: #ffffff;
        }

        /* Style page content */
        .main {
            margin-left: 160px;
            /* Same as the width of the sidebar */
            padding: 0px 10px;
        }

        .scroll-link {
            margin-top: 15px;
        }

        h2 {
            margin-right: 20px;
            font-weight: 500;
        }

        b {
            font-weight: 550;
        }

        i {
            margin-right: 5px;
            size: 20%;
        }

        img {
            margin: 18px;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .tugaspweb {
            text-align: center;
            font-size: 200px;
            font-weight: 150;
            margin-top: 215px;
        }

        .main2 {
            position: absolute;
            padding-left: 300px;
        }

        .home {
            margin-left: 20px;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }

    </style>
</head>
<body>

    <header class="bg-bold text-right">
        <div class="media-body" style="font-size: 20px;">
            Ariq Bimo Nurputro - 5026201071
            <img src="F" alt="" class="ml-3 mt-3 rounded-circle" style="width:60px;">
        </div>
    </header>

    <div class="sidenav">

        <h2 class="home">Home</h2>

        <hr>
        <a class="scroll-link" href="pegawai"><i class="fas fa-user fa-sm"></i> Pegawai</a>
        <a class="scroll-link" href="absen"><i class="fas fa-check fa-sm"></i> Absen</a>
        <a class="scroll-link" href="#section-3"><i class="fas fa-hand-holding-usd fa-sm"></i> Pendapatan</a>
        <a class="scroll-link" href="#section-4"><i class="fas fa-question fa-sm"></i> Coming soon!</a>
        <a class="scroll-link" href="#section-5"><i class="fas fa-question fa-sm"></i> Coming soon!</a>
        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-3" style="background-color:  rgb(36, 36, 36); color: white;""
        >
          <b> Hak cipta oleh </b> <br> Ariq Bimo Nurputro - 5026201071
        </div>
      </footer>
    </div>

    <!-- Page content -->
    <div class=" main2">
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
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</body>
</html>
