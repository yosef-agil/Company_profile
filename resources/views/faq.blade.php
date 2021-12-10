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
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="height: 80px;">
            <div class="container-fluid">
                <div class="brand">
                    <a class="navbar-brand" href="/home" style="padding-left: 50px;"><img
                            style=" width:10%;padding-bottom: 10px;" src="{{ ('assets/beranda/lg1.png') }}" alt=""></a>
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


    <!-- content -->
    <div class="container" style="padding-top: 120px; padding-bottom: 40px">
        <div class="row ">
            <div class="col-2">
            </div>
            <div class="col-8">
                <h1 class="text-center">Informasi Coca Cola Company</h1>
            </div>
            <div class="col-2">
            </div>
        </div>
        </div>
        <div class="container" >
        <div class="card text-center" >
            <div class="row row-cols-1 row-cols-md-3 g-4 ">
                <div class="col">
                    <div class="card" style="background-color: #FSFSFS">
                        <a href="/faqminuman"> <img src="assets/FAQ/1.png" class="card-img-top"> </a>
                        <div class="card-body">
                            <h3 class="card-title">Minuman</h3>
                            <p class="card-text">Apa perbedaan antara Coca-Cola Zero Sugar dan Coca-Cola Light?</p>
                            <a href="/faqminuman" class="btn btn-danger">Selanjutnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <a href="/faqkomposisi"> <img src="assets/FAQ/2.png" class="card-img-top"> </a>
                        <div class="card-body">
                            <h3 class="card-title">Komposisi</h3>
                            <p class="card-text">Berapakah kandungan gula yang terdapat di Coca-Cola Classic?</p>
                            <a href="/faqkomposisi" class="btn btn-danger">Selanjutnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <a href="/faqkesehatan"><img src="assets/FAQ/3.png" class="card-img-top"> </a>
                        <div class="card-body">
                            <h3 class="card-title">Kesehatan</h3>
                            <p class="card-text">Berapakah kandungan gula yang terdapat di Coca-Cola Classic?</p>
                            <a href="/faqkesehatan" class="btn btn-danger">Selanjutnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <a href="/faqsejarah"><img src="assets/FAQ/4.png" class="card-img-top"> </a>
                        <div class="card-body">
                            <h3 class="card-title">Sejarah</h3>
                            <p class="card-text">Siapa yang pertama kali menemukan Coca-Cola?</p>
                            <a href="/faqsejarah" class="btn btn-danger">Selanjutnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <a href="/faqisu"> <img src="assets/FAQ/5.png" class="card-img-top"> </a>
                        <div class="card-body">
                            <h3 class="card-title">Isu dan Rumor</h3>
                            <p class="card-text">Apakah benar Coca-Cola mengandung kokain?</p>
                            <a href="/faqisu" class="btn btn-danger">Selanjutnya</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <a href="/faqhubungi"><img src="assets/FAQ/6.png" class="card-img-top"> </a>
                        <div class="card-body">
                            <h3 class="card-title">Hubungan Kami</h3>
                            <p class="card-text">Coca-Cola Indonesia, Coca-Cola Foundation Indonesia</p>
                            <a href="/faqhubungi" class="btn btn-danger">Selanjutnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container" style="padding-top: 50px;">
            <div class="row ">
                <div class="col-12">
                    <hr size="5px">
                </div>
            </div>
        </div>
        </div>
    </section>
    <footer class="footer-07">
        <div class="container" style="padding-top: 20px; ">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <h2 class="footer-heading">Coca Cola Company</h2>
                    <p class="menu">
                        <a aria-current="page" style="text-decoration:none ;color: black" href="/home">Home</a> |
                        <a aria-current="page" style="text-decoration:none ;color: black" href="/produk">Produk Kami</a>
                        |
                        <a aria-current="page" style="text-decoration:none ;color: black" href="/artikel">Artikel</a> |
                        <a aria-current="page" style="text-decoration:none ;color: black" href="/tujuan">Tujuan</a> |
                        <a aria-current="page" style="text-decoration:none ;color: black" href="/tentang">Tentang</a> |
                        <a aria-current="page" style="text-decoration:none ;color: black" href="/faq">FAQ</a>
                    </p>

                    <a href="https://www.facebook.com/Coca-Cola/" class="fa fa-facebook" style="margin-right: 20px"></a>
                    <a href="https://twitter.com/CocaCola_ID" class="fa fa-twitter" style="margin-right: 20px"></a>
                    <a href="https://www.youtube.com/user/cocacola" class="fa fa-youtube"
                        style="margin-right: 20px"></a>

                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 text-center">
                    <p class="copyright">
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());

                        </script> | coca cola company <i class="ion-ios-heart" aria-hidden="true"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
