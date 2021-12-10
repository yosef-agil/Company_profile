<html>

<head>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/master.css')}}" rel="stylesheet">
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/media.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/home.css')}}">
    <title>Home</title>
</head>

<body>
    <!-- navbar -->
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="height: 80px;">
            <div class="container-fluid">
                <div class="brand">
                    <a class="navbar-brand" href="/home" style="padding-left: 50px;"><img style=" width:30%;" src="{{ ('assets/beranda/lg2.png') }}" alt=""></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav" style="padding-right: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/produk">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/artikel">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/kontak">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tentang">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/faq">FAQ</a>
                        </li>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid" style="padding-top: 100px;padding-bottom: 100px;">
        <div class="row">
            <div class="col">
                <img style=" width:100%;" src="{{ ('assets/beranda/h1.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="container-fluid" style="padding-top: 20px; background-color: rgb(217, 217, 217);">
        <div class="row align-self-center" style="margin:110px 8px 110px 8px;">

            <!-- Heading & title -->
            <div class="col-md-6">
                <h2>Gandeng Anak-anak muda, Cola-cola Luncurkan Program Plastic Reborn 2.0</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fuga ab fugit alias ut. Repellendus esse inventore id nihil
                    accusantium a exercitationem quo libero, amet eaque.
                </p>
                <button class="btn btn-primary"><a href="/"></a>Baca lagi</button>
            </div>

            <!-- image -->
            <div class="col-md-6" style="padding-bottom: 50px;">
                <img style=" width:100%;" src="{{ ('assets/beranda/img1-beranda.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid" style="padding-top: 50px; background-color: rgb(217, 217, 217);">
        <div class="row">
            <div class="col-12">
                <footer class="footer-07">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12 text-center">
                                <h2 class="footer-heading">Coca Cola Company</h2>
                                <p class="menu">
                                    <a aria-current="page" style="text-decoration:none ;color: black"
                                        href="/home">Home</a> |
                                    <a aria-current="page" style="text-decoration:none ;color: black"
                                        href="/produk">Produk Kami</a> |
                                    <a aria-current="page" style="text-decoration:none ;color: black"
                                        href="/artikel">Artikel</a> |
                                    <a aria-current="page" style="text-decoration:none ;color: black"
                                        href="/kontak">Kontak Kami</a> |
                                    <a aria-current="page" style="text-decoration:none ;color: black"
                                        href="/tentang">Tentang</a> |
                                    <a aria-current="page" style="text-decoration:none ;color: black"
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
</body>

</html>
