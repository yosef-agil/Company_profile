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
                <h1 class="text-center" style="font-weight:bold">Sejarah</h1>
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
                                    1. Siapa yang pertama kali menemukan Coca-Cola?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong> Dr John S Pemberton. </strong>Beliau menemukan Coca-Cola pada 8 Mei 1886 di
                                    Atlanta, Georgia. Dr Pemberton menguji minuman tersebut pada pelanggan di apotek
                                    setempat, Jacobs??? Pharmacy, yang kemudian menjadi sangat populer dan dijual dengan
                                    harga lima sen per gelas.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-weight:bold">
                                    2. Dimanakah formula rahasia Coca-Cola disimpan?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Disimpan di The Vault of the Secret Formula yang bertempat di World of
                                        Coca-Cola di Amerika Serikat.</strong> Formula rahasia Coca-Cola telah mengalami
                                    perjalanan yang menarik selama bertahun-tahun:
                                    1886 ??? Dr John S. Pemberton menemukan Coca-Cola di Atlanta.
                                    1892 ??? Asa Candler membeli hak bisnis Coca-Cola dan formula rahasianya.
                                    1919 ??? Ernest Woodruff dan sekelompok investor membeli perusahaan tersebut dari
                                    Candler dan menjadikan formula rahasia sebagai jaminan pinjaman. Woodruff meminta
                                    putra Candler menuliskan rumus tersebut dan meletakkan kertasnya di lemari besi di
                                    Guaranty Bank, New York.
                                    1925 ??? Woodruff membayar kembali pinjamannya dan menebus formula rahasia, membawanya
                                    pulang ke Atlanta dan menyimpannya di Trust Company Bank.
                                    2011 ??? Setelah 86 tahun, formula rahasia dipindahkan ke World of Coca-Cola di
                                    Atlanta. Ribuan orang mengunjungi Vault of the Secret Formula setiap tahunnya.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-weight:bold">
                                    3. Apakah benar Coca-Cola pada awalnya merupakan obat?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Tidak benar.</strong>Coca-Cola tidak diciptakan sebagai obat namun ditemukan
                                    oleh seorang dokter dan apoteker bernama Dr John S Pemberton.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-weight:bold">
                                    4. Kapan Coca-Cola pertama kali tersedia di Indonesia?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Coca-Cola pertama kali didistribusikan di Indonesia pada tahun 1927 dan diproduksi
                                    secara local pada tahun 1932
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="font-weight:bold">
                                    5. Kapan The Coca-Cola Company pertama kali didirikan?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Tahun 1892. </strong> Meskipun Coca-Cola ditemukan dan pertama kali dijual
                                    pada tahun 1888, formula rahasia dan brand Coca-Cola sendiri baru dibeli pada tahun
                                    1889 oleh Asa Griggs Candler, yang menggabungkannya ke dalam The Coca-Cola Company
                                    tiga tahun kemudian. Pada tanggal 5 Desember 1919, sebuah konsorsium pengusaha yang
                                    dipimpin Ernest Woodruff, ayah Robert W. Woodruff, membeli The Coca-Cola Company
                                    seharga $25 juta dan langsung memasukannya ke pasar saham New York.
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
