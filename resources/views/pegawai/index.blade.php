<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/tesbst4satatic.css" />
</head>

<body>

    <header class="bg-bold text-right">
        <div class="media-body" style="font-size: 20px;">
            Ariq Bimo Nurputro - 5026201071
            <img src="images/F.png" alt="" class="ml-3 mt-3 rounded-circle" style="width:60px;">
        </div>
    </header>

    <div class="sidenav">

        <h2 class="home">Home</h2>

        <hr>
        <a class="scroll-link" href="pegawai"><i class="fas fa-user fa-sm"></i> Pegawai</a>
        <a class="scroll-link" href="absen"><i class="fas fa-check fa-sm"></i> Absen</a>
        <a class="scroll-link" href="pendapatan"><i class="fas fa-hand-holding-usd fa-sm"></i> Pendapatan</a>
        <a class="scroll-link" href="#section-4"><i class="fas fa-question fa-sm"></i> Coming soon!</a>
        <a class="scroll-link" href="#section-5"><i class="fas fa-question fa-sm"></i> Coming soon!</a>
        <br>
        <a class="scroll-link" href="bahagiaaa"><i class="fas fa-home fa-sm"></i>Home</a>
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
                <h3>Data Pegawai</h3>

                <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

                <br />
                <br />

                <table border="1">
                    <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                    @foreach ($pegawai as $p)
                        <tr>
                            <td>{{ $p->pegawai_nama }}</td>
                            <td>{{ $p->pegawai_jabatan }}</td>
                            <td>{{ $p->pegawai_umur }}</td>
                            <td>{{ $p->pegawai_alamat }}</td>
                            <td>
                                <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                                |
                                <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
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
