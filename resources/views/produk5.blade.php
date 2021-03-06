<html>

<head>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/master.css')}}" rel="stylesheet">
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/media.css')}}">

</head>

<body>
    <!-- navbar -->
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="height: 80px; background-color: #191919">
            <div class="container-fluid">
                <div class="brand">
                    <a class="navbar-brand" href="/home" style="padding-left: 40px;"><img style=" width:30%;"
                            src="{{ ('assets/beranda/3.png') }}" alt=""></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent"
                    style="padding-left: 300px; padding-right:40px;">
                    <ul class="navbar-nav  ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link " style="color: white" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="color: white" href="/produk">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " style="color: white" href="/artikel">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white" href="/kontak">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white" href="/tentang">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " style="color: white" href="/faq">FAQ</a>
                        </li>
                </div>
            </div>
        </nav>
    </div>

    <!-- content -->
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <div class="container" style="padding-top: 100px;">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ ('assets/produk/minuman/f1.png') }}" class="d-block" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ ('assets/produk/minuman/f2.png') }}" class="d-block" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ ('assets/produk/minuman/f3.png') }}" class="d-block" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ ('assets/produk/minuman/f4.png') }}" class="d-block" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ ('assets/produk/minuman/f5.png') }}" class="d-block" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ ('assets/produk/minuman/f6.png') }}" class="d-block" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ ('assets/produk/minuman/f7.png') }}" class="d-block" alt="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8" style="text-align: justify;">
                <br><br>
                <p>Minuman Teh </p>
                <p>Jasmine: Minuman Teh Melati<br>
                    Green: Minuman Teh Hijau<br>
                    Green Honey: Minuman Teh Hijau Rasa Madu<br>
                    Apple: Minuman The Rasa Apel<br>
                    Passionfruit: Minuman Teh Rasa Markisa<br>
                    Low Calorie: Minuman Teh Beraroma Melati Rendah Energi<br>
                    Milk Tea Brown Sugar: Minuman Teh Susu Gula Aren<br><br>

                    Frestea diproduksi di bawah otoritas Pacific Refreshments Pte. Ltd dengan menggunakan standar
                    kualitas tinggi The Coca-ColaCompany,
                    menggunakan teknologi tinggi dan didukung oleh proses produksi yang baik, demi memastikan bahwa
                    setiap botol Frestea memilki kualitas yang sama. <br><br>

                    Varian rasa :<br>
                    Jasmine, Green, Green Honey, Apel, Markisa, Rendah Kalori, dan Teh Susu Gula Aren
                    <br><br><br><br>

                    Kemasan yang tersedia :<br><br>
                    PET : 500 ml, 350 ml, & 900 ml<br>
                    RGB : 220 ml<br>
                    CUP : 296 ml<br>
                </p>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="container-fluid" style="padding-top: 50px; background-color: #191919 ; color: white;">
        <div class="row">
            <div class="col-12">
                <footer class="footer-07">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12 text-center">
                                <h2 class="footer-heading">Coca Cola Company</h2>
                                <p class="menu">
                                    <a aria-current="page" style="text-decoration:none ;color: white"
                                        href="/home">Home</a> |
                                    <a aria-current="page" style="text-decoration:none ;color: white"
                                        href="/produk">Produk Kami</a> |
                                    <a aria-current="page" style="text-decoration:none ;color: white"
                                        href="/artikel">Artikel</a> |
                                    <a aria-current="page" style="text-decoration:none ;color: white"
                                        href="/kontak">Kontak Kami</a> |
                                    <a aria-current="page" style="text-decoration:none ;color: white"
                                        href="/tentang">Tentang</a> |
                                    <a aria-current="page" style="text-decoration:none ;color: white"
                                        href="/faq">FAQ</a>
                                </p>
                                <a href="https://www.facebook.com/Coca-Cola/" class="fa fa-facebook"
                                    style="margin-right: 20px"></a>
                                <a href="https://twitter.com/CocaCola_ID" class="fa fa-twitter"
                                    style="margin-right: 20px"></a>
                                <a href="https://www.youtube.com/user/cocacola" class="fa fa-youtube"
                                    style="margin-right: 20px"></a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 text-center">
                                <p class="copyright">
                                    Copyright | Coca Cola company <i class="ion-ios-heart" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    </div>
</body>

</html>
