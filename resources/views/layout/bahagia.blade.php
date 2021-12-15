<!DOCTYPE html>
<html>

<head>
    <title>@yield('judulhalaman')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/testestestes.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
    <style>
        /* Google Font Link */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 78px;
            background: #202833;
            padding: 6px 14px;
            z-index: 99;
            transition: all 0.5s ease;
        }

        .fa-arrow-left {
            opacity: 0;
        }

        .sidebar.open .fa-arrow-left {
            opacity: 1;
        }

        .sidebar.open {
            width: 250px;
        }

        .sidebar .logo-details {
            height: 60px;
            display: flex;
            align-items: center;
            position: relative;
        }

        .sidebar .logo-details .icon {
            opacity: 0;
            transition: all 0.5s ease;
        }

        .sidebar .logo-details .logo_name {
            color: #66fcf1;
            font-size: 20px;
            font-weight: 600;
            opacity: 0;
            transition: all 0.5s ease;
        }

        .sidebar.open .logo-details .icon,
        .sidebar.open .logo-details .logo_name {
            opacity: 1;
        }

        .sidebar .logo-details #btn {
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            font-size: 22px;
            transition: all 0.4s ease;
            font-size: 23px;
            text-align: center;
            cursor: pointer;
            transition: all 0.5s ease;
        }

        .sidebar.open .logo-details #btn {
            text-align: right;
        }

        .sidebar i {
            color: #66fcf1;
            height: 60px;
            min-width: 50px;
            font-size: 28px;
            text-align: center;
            line-height: 60px;
        }

        .sidebar .nav-list {
            margin-top: 20px;
            height: 100%;
        }

        .sidebar li {
            position: relative;
            margin: 8px 0;
            list-style: none;
        }

        .sidebar li .tooltip {
            position: absolute;
            top: -20px;
            left: calc(100% + 15px);
            z-index: 3;
            background: #66fcf1;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 15px;
            font-weight: 400;
            opacity: 0;
            white-space: nowrap;
            pointer-events: none;
            transition: 0s;
        }

        .sidebar li:hover .tooltip {
            opacity: 1;
            pointer-events: auto;
            transition: all 0.4s ease;
            top: 50%;
            transform: translateY(-50%);
        }

        .sidebar.open li .tooltip {
            display: none;
        }

        .sidebar input {
            font-size: 15px;
            color: #66fcf1;
            font-weight: 400;
            outline: none;
            height: 50px;
            width: 100%;
            width: 50px;
            border: none;
            border-radius: 12px;
            transition: all 0.5s ease;
            background: #1d1b31;
        }

        .sidebar.open input {
            padding: 0 20px 0 50px;
            width: 100%;
        }

        .sidebar li a {
            display: flex;
            height: 100%;
            width: 100%;
            border-radius: 12px;
            align-items: center;
            text-decoration: none;
            transition: all 0.4s ease;
            background: #11101D;
        }

        .sidebar li a:hover {
            background: #66fcf1;
        }

        .sidebar li a .links_name {
            color: #66fcf1;
            font-size: 15px;
            font-weight: 400;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: 0.4s;
        }

        .sidebar.open li a .links_name {
            opacity: 1;
            pointer-events: auto;
        }

        .sidebar li a:hover .links_name,
        .sidebar li a:hover i {
            transition: all 0.5s ease;
            color: #11101D;
        }

        .sidebar li i {
            height: 50px;
            line-height: 50px;
            font-size: 18px;
            border-radius: 12px;
        }

        .home-section {
            position: relative;
            background: #0e0f14;
            min-height: 100vh;
            top: 0;
            left: 78px;
            width: calc(100% - 78px);
            transition: all 0.5s ease;
            z-index: 2;
        }

        .sidebar.open~.home-section {
            left: 250px;
            width: calc(100% - 250px);
        }

        .home-section .text {
            display: inline-block;
            color: #66fcf1;
            font-size: 25px;
            font-weight: 500;
            margin: 18px;
        }

        #name {
            color: #66fcf1;
            font-size: 25px;
            font-weight: 300;
        }

        .home-section img {
            border: 2px solid #66fcf1;
            width: 50px;
        }

        .konten {
            color: #ffffff;
            font-weight: 200;
            margin: 18px;
            margin-left: 30px;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        table {
            margin-bottom: 10px;
        }

        a {
            color: #66fcf1;
        }

        a :hover {}

        select {
            padding: 8px;
            text-align: left;
            border-radius: 15px;
        }

        select :hover {
            padding: 8px;
            text-align: left;
            border-radius: 15px;
            background-color: #0e0f14;
        }

        #tanggall {
            padding: 15px;
            text-align: left;
            border-radius: 15px;
            height: 40px;
            right: 15px;
        }

        .btnsimpandata {
            color: Black;
            background-color: #66fcf1;
            border-radius: 15px;
            border: none;
            padding: 8px;
            font-weight: 500l
        }

        .btnsimpandata a :hover {
            color: #66fcf1;
            background-color: Black;
            border-radius: 15px;
            border: none;
            padding: 8px;
        }

        .labeleditabsen {
            margin-top: 30px;
            margin-bottom: 20px;
        }

        .btn {
            margin-top: 10px;
            margin-bottom: 10px;
            background-color: #66fcf1;
            color: #000000
        }

        @media (max-width: 420px) {
            .sidebar li .tooltip {
                display: none;
            }
        }

    </style>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='fas fa-server'></i>
            <div class="logo_name">Menu</div>
            <i class='fas fa-arrow-left' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="pegawai">
                    <i class="fas fa-user fa-sm"></i>
                    <span class="links_name">Pegawai</span>
                </a>
                <span class="tooltip">Pegawai</span>
            </li>
            <li>
                <a href="absen">
                    <i class="fas fa-check fa-sm"></i>
                    <span class="links_name">Absen</span>
                </a>
                <span class="tooltip">Absen</span>
            </li>
            <li>
                <a href="pendapatan">
                    <i class="fas fa-hand-holding-usd fa-sm"></i>
                    <span class="links_name">Pendapatan</span>
                </a>
                <span class="tooltip">Pendapatan</span>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-question fa-sm"></i>
                    <span class="links_name">Coming soon!</span>
                </a>
                <span class="tooltip">Coming soon!</span>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <nav class="navbar navbar-expand-sm py-1">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <div class="text">@yield('title')</div>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="media-body" id="name">
                        Ariq Bimo Nurputro - 5026201071
                        <img src="https://zedemy.com/wp-content/uploads/avatars/1741/6133176bc6042-bpfull.jpg" alt=""
                            class="ml-3 rounded-circle">
                    </div>
                </li>
            </ul>

        </nav>

        @yield('konten')
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("fas fa-server", "fas fa-arrow-left"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("fas fa-arrow-left", "fas fa-server"); //replacing the iocns class
            }
        }
    </script>

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

    {{-- <p></p>

    <h3>@yield('judulhalaman')</h3>

    @section('konten')

    @show --}}

</body>

</html>
