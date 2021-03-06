<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css\formstyle.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/fe8d7ff981.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <p>Ariq Bimo Nurputro<br />Bimo<br />5026201071</p>
        <h2>Form Input Peminjaman Buku</h2>

        <form class="form" id="form"
            action="https://www.amazon.com/Beginning-HTML5-CSS3-Dummies-Tittel/dp/1118657209?ref_=ast_sto_dp">
            <div class="form-control">
                <label for="judul">Judul Buku</label>
                <input type="text" placeholder="Input book title" name="book" minlength="10" />
                <small>Error message</small>
            </div>

            <div class="form-control">
                <label for="nobuku">No Buku</label>
                <input type="text" placeholder="Input book number" name="nobuku" maxlength="5" />
                <small>Error message</small>
            </div>

            <div class="form-control">
                <label for="jenispinjam">Jenis Peminjaman</label><br />
                <select class="dropdown" name="jenis">
                    <option value="0" selected="" disabled="">Select your plan</option>
                    <option>Biasa</option>
                    <option>Kilat</option>
                    <option>Lama</option>
                </select>
            </div>

            <div class="form-control">
                <label for="tanggal">Tanggal Peminjaman</label>
                <input type="date" placeholder="mm/dd/yyyy" name="tanggal" />
                <small>Error message</small>
            </div>
            <input type="reset" class="btn1" value="Reset" />
            <input type="submit" class="btn2" value="Simpan">
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="js\formval.js"></script>
</body>

</html>
