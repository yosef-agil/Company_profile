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
                            <a class="nav-link" style="color: white" href="/produk">Produk</a>
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
                            <a class="nav-link active " style="color: white" href="/faq">FAQ</a>
                        </li>
                </div>
            </div>
        </nav>
    </div>

    <!-- content -->
    <div class="container" style="padding-top: 100px; text-align: justify ">
        <div class="row ">
            <div class="col-2">
            </div>
            <div class="col-8">
                <h1 class="text-center" style="font-weight:bold">Komposisi</h1>
            </div>
            <div class="col-2">
            </div>

            <div class="row ">
                <div class="col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-weight:bold">
                                    1. Berapakah kandungan gula yang terdapat di Coca-Cola Classic?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Sebagai aturan umum, terdapat 10.6g kandungan gula per 100ml Coca-Cola Classic.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-weight:bold">
                                    2. Berapakah kandungan gula yang terdapat di Coca-Cola Light?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Tidak ada sama sekali.</strong>Kami menggunakan campuran pemanis rendah
                                    kalori untuk menghadirkan rasa Coca-Cola Light yang nikmat dan bebas akan gula.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-weight:bold">
                                    3. Berapakah kandungan kafein yang terdapat di Coca-Cola?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Tidak ada sama sekali.</strong>Jumlah kafein pada kaleng 330ml: Coca-Cola
                                    Classic = 32mg, Coca-Cola Zero Sugar = 32mg, Coca-Cola Light = 42mg.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-weight:bold">
                                    4. Berapakah kandungan gula yang terdapat di Coca-Cola Zero Sugar?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Kami menggunakan campuran pemanis dan perasa rendah kalori untuk membuat rasa
                                    Coca-Cola Zero Sugar semakin menyerupai Coca-Cola Classic.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"style="font-weight:bold">
                                    5. Berapakah kandungan gula yang terdapat di Coca-Cola Zero Sugar?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Tidak</strong> Bahan dasar dan proses produksi kami diatur secara ketat oleh
                                    pemerintah dan otoritas kesehatan di lebih dari 200 negara. Semua institusi tersebut
                                    telah secara konsisten mengakui Coca-Cola sebagai produk non-alkohol.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="font-weight:bold">
                                    6. Apa saja komposisi Coca-Cola Classic?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Berikut adalah daftar lengkap bahan dasar Coca-Cola:
                                    Air berkarbonasi ??? Sekitar 90% Coca-Cola adalah air. Bagian yang dikarbonasi adalah
                                    karbon dioksida yang dimurnikan, yang memberikan ???gelembung??? atau ???desis??? khas
                                    Coca-Cola.
                                    Gula ??? Rasa manis Coca-Cola (dan rasa nikmatnya di lidah) berasal dari gula.
                                    Coca-Cola Zero Sugar dan Coca-Cola Light tidak memiliki kandungan gula sama sekali,
                                    Warna karamel ??? Karamel yang sangat spesifik dibuat khusus bagi Coca-Cola untuk
                                    memberikan warna minumannya yang khas.
                                    Asam fosfat ??? Rasa tajam Coca-Cola berasal dari penggunaan asam fosfat.
                                    Kafein ??? Rasa sedikit pahit Coca-Cola berasal dari kafein.
                                    Konsentrat Kola ??? Inti dari formula rahasia Coca-Cola adalah perpaduan rasanya yang
                                    alami. Ini merupakan bagian formula rahasia yang paling dijaga.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" style="font-weight:bold">
                                    7. Why do some Coca-Cola drinks contain caffeine?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Banyak orang terkejut saat mengetahui bahwa kafein merupakan salah satu bahan dasar
                                    yang memberikan Coca-Cola rasanya yang unik. Kafein adalah bahan yang dikonsumsi
                                    oleh banyak orang setiap hari dalam minuman seperti kopi, teh, dan minuman ringan.
                                    Kami tahu tidak semua orang ingin mengonsumsi kafein dan tidak semua orang ingin
                                    meminumnya setiap saat, jadi kami juga menawarkan berbagai minuman bebas kafein,
                                    seperti Fanta dan Sprite, sehingga mereka dapat membuat pilihan minuman yang tepat
                                    untuk diri sendiri serta keluarga.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight style="font-weight:bold"">
                                    8. Apakah minuman dengan pemanis rendah kalori dan tanpa kalori, seperti Coca-Cola
                                    Zero Sugar, akan membuat berat badan saya bertambah?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Tidak</strong> Pemanis rendah dan bebas kalori digunakan sebagai pengganti
                                    gula dalam banyak makanan untuk memberikan pilihan kadar dikurangi, rendah, atau
                                    tanpa kalori bagi masyarakat. Karena pemanis rendah dan bebas kalori mampu
                                    memberikan rasa yang manis dengan jumlah asupan kalori sedikit atau tak ada sama
                                    sekali, pemanis tersebut dapat membantu banyak orang dalam mengatur asupan kalori
                                    mereka.
                                    Semua minuman dapat dinikmati secukupnya sebagai bagian gaya hidup seimbang
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine" style="font-weight:bold">
                                    9. Apakah ada zat aditif yang terkandung di dalam Coca-Cola?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Tidak</strong> Kami menggunakan zat aditif dalam sejumlah minuman kami,
                                    termasuk Coca-Cola Classic, untuk memberikan rasa dan warna serta meningkatkan daya
                                    tarik mereka. Kami hanya menggunakan zat aditif yang diketahui dan telah terbukti
                                    aman dalam minuman kami.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen" style="font-weight:bold">
                                    10. Apakah karbonasi di dalam minuman aman untuk dikonsumsi?
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Tentu saja aman. Seperti bahan makanan lain, karbon dioksida, yang digunakan untuk
                                    mengkarbonasi minuman, telah ditinjau oleh otoritas yang berwenang di seluruh dunia
                                    dan keamanannya telah dipastikan.
                                    Karbon dioksida terbentuk secara alami di atmosfer sebagai gas yang tak berwarna dan
                                    tak berbau. Kita sendiri mengeluarkan karbon dioksida saat bernafas dan yang diserap
                                    oleh tumbuhan.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
        <!-- footer -->
        <div class="container" style="padding-top: 50px;">
        </div>
    </div>
    </section>
    <div class="container-fluid"
        style="padding-bottom: 50px; padding-top: 50px; background-color: #191919 ; color: white;">
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
