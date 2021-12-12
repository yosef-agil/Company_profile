<html>

<head>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/master.css')}}" rel="stylesheet">
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/media.css')}}">
    <title>Home</title>
</head>

<body>
    <!-- navbar -->
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="height: 80px; background-color: #333333">
            <div class="container-fluid">
                <div class="brand">
                    <a class="navbar-brand" href="/home" style="padding-left: 40px;"><img style=" width:30%;" src="{{ ('assets/beranda/3.png') }}" alt=""></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent"  style="padding-left: 300px; padding-right:40px;">
                    <ul class="navbar-nav  ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link active" style="color: white" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white" href="/produk">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white" href="/artikel">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white" href="/kontak">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white" href="/tentang">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " style="color: white" href="/faq">FAQ</a>
                        </li>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid" style="padding-top: 120px;padding-bottom: 40px; padding-left: 40px; background-color: rgb(255, 51, 51) ">
        <div class="row">
            <div class="col-md-6">
                <img class="g" src="{{ ('assets/beranda/b1.jpg') }}" alt="">
            </div>
            <div class="col-md-6" style="padding-top: 100px;">
            <h2 style="color: white ; ">The Coca-Cola Company</h2>
            <p class="f">
            Coca-Cola adalah minuman ringan paling populer dan paling laris dalam sejarah, serta salah satu merek yang paling dikenal di dunia. <br><br>
                <button class="btn btn-light" ><a href="/"></a>Baca lagi</button> 
            </p>
        
            </div>
            
        </div>
    </div>

    <!-- content -->
    <div class="container-fluid bg-light" style="padding-top: 20px;">
        <div class="row align-self-center" style="margin:110px 8px 110px 8px;">

            <!-- Heading & title -->
            <div class="col-md-6">
                <h2>Gandeng Anak-anak muda, Cola-cola Luncurkan Program Plastic Reborn 2.0</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fuga ab fugit alias ut. Repellendus esse inventore id nihil
                    accusantium a exercitationem quo libero, amet eaque.
                </p>
                <button class="btn btn-primary"><a href="/produk"></a>Baca lagi</button>
            </div>

            <!-- image -->
            <div class="col-md-6" style="padding-bottom: 50px;">
                <img style=" width:100%;" src="{{ ('assets/beranda/img1-beranda.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid" style="padding-top: 50px; background-color: #333333 ; color: white;">
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
</body>

</html>
