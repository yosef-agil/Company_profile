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
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ ('assets/produk/minuman/ad.png') }}" class="d-block" alt="">
                            </div>
                        </div>
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
                <p>Air Mineral</p>
                <p> Peluncuran Ades baru dari The Coca-Cola Company ini menampilkan Ades sebagai air minum dalam kemasan
                    yang Murni, Aman dan Terpercaya, yang dijamin oleh The Coca-Cola Company.
                    <br><br>
                    Botol Ades 600 ml memakai bahan plastik yang lebih sedikit sehingga mudah diremukkan.
                    Dengan volume botol kosong yang lebih kecil setelah diremukkan, maka akan menghemat ruang di tempat
                    sampah.
                    Dan selanjutnya juga menghasilkan jejak emisi karbon yang lebih kecil saat sampah tersebut
                    diangkut.<br><br>
                    Dengan tampilan baru ini, Ades memiliki misi mulia untuk menjadikan Indonesia lebih baik melalui
                    tindakan sederhana untuk lingkungan.<br><br>
                    Ades ingin menyasar para generasi muda yang memiliki kekuatan untuk melakukan perubahan, terbuka
                    terhadap peluang baru, dan siap mewujudkannya dalam tindakan nyata.
                    Harapannya, mereka juga lebih kritis dalam membeli produk yang akan dikonsumsi.<br><br><br><br>

                    Kemasan yang tersedia :<br><br>
                    PET : 350 ml, 600 ml, 1.5L
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
