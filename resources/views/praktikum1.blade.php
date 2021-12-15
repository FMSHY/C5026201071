<!DOCTYPE html>
<html lang="en">

<head>
    <title>PRAKTIKUM PEMROGRAMAN WEB</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="css\project.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <main>
        <div class="container">
            <hr />
            <br />
            <div class="row">
                <div class="col-md-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="
                    background-image: url(https://s2.bukalapak.com/img/73094917192/large/data.jpeg.webp);
                  "></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" style="
                    background-image: url(https://s1.bukalapak.com/img/64094917192/large/data.jpeg.webp);
                  "></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2" style="
                    background-image: url(https://s4.bukalapak.com/img/41347110292/large/data.jpeg.webp);
                  "></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"
                                style="background-image: url(images\praktikum1\img11.png)"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4" style="
                    background-image: url(https://s1.bukalapak.com/img/17984917192/large/data.jpeg.webp);
                  "></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100"
                                    src="https://s2.bukalapak.com/img/73094917192/large/data.jpeg.webp"
                                    alt="First slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="https://s1.bukalapak.com/img/64094917192/large/data.jpeg.webp"
                                    alt="Second slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="https://s4.bukalapak.com/img/41347110292/large/data.jpeg.webp"
                                    alt="Third slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images\praktikum1\img11.png" alt="Third slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="https://s1.bukalapak.com/img/17984917192/large/data.jpeg.webp"
                                    alt="Third slide" />
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <button id="favorit" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                        Favoritkan
                    </button>
                    <span>&#124;</span>
                    <button id="share" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-share-fill" viewBox="0 0 16 16">
                            <path
                                d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z" />
                        </svg>
                        Bagikan
                    </button>
                </div>
                <div class="col-md-7">
                    <!-- <p class="judul">
              MCDODO CH-717 TRAVEL ADAPTOR CHARGER LED DISPLAY PD FAST CHARGING
              POWER DELIVERY QUICK CHARGE QC 3.0
            </p> -->
                    <div class="media">
                        <div class="media-body">
                            <h4>MCDODO CH-717 TRAVEL ADAPTOR CHARGER LED DISPLAY PD FAST CHARGING
                                POWER DELIVERY QUICK CHARGE QC 3.0</h4>
                        </div>
                        <img src="images\praktikum1\emblem-new-super-seller.png" alt="John Doe" class="ml-5"
                            style="width: 15%;">
                    </div>
                    <div>
                        <span id="ulasan" class="fa fa-star checked"></span>
                        <span id="ulasan" class="fa fa-star checked"></span>
                        <span id="ulasan" class="fa fa-star checked"></span>
                        <span id="ulasan" class="fa fa-star checked"></span>
                        <span id="ulasan2" class="fa fa-star checked"></span>
                        <span class="rating">26 Ulasan</span>
                        <span class="divider">&#9679;</span>
                        <span class="terjual">27 Terjual</span>
                        <p class="harga"><b>Rp125.000</b></p>
                        <p id="stok" style="font-size: 14px">Tersedia > 10 stok barang</p>
                        <hr />
                        <button id="chatbox" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path
                                    d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg>
                            Chat
                        </button>
                        <button id="masukankeranjang" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cart-plus" viewBox="0 0 16 16">
                                <path
                                    d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                                <path
                                    d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg>
                            Masukan Keranjang
                        </button>
                        <button id="beli" type="button">Beli Sekarang</button>
                        <p id="bayarsekarang">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                            </svg>
                            Bayar sebelum jam 16:00 WIB agar barang dikirim hari ini
                        </p>
                        <hr />
                        <div id="iklanbawah2" class="media p-3">
                            <img src="https://s0.bukalapak.com/elysium/images/illustration-qr.png" alt="John Doe"
                                class="mr-3" style="width: 60px" />
                            <div class="media-body">
                                <h4 style="font-size: 12px">
                                    <b> Lebih Hemat di Aplikasi! </b>
                                </h4>
                                <p id="iklanbawah" style="font-size: 11px">
                                    Ada gratis ongkir dan promo menarik menanti kamu. Download
                                    sekarang!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
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
