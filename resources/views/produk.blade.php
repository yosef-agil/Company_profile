<html>

<head>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/master.css')}}" rel="stylesheet">
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/media.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/media.css')}}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />

</head>

<body>
    <!-- navbar -->
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="height: 80px; background-color: #333333">
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

    <!--Reviews Section-->
    <section class="section-5">
        <div class="container-fluid px-lg-4 px-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials">
                        <div class="desc">
                            <h3 class="judul">Produk Kami</h3>
                        </div>
                        <div id="carousel1" class="owl-carousel">

                            <!--Testimonial Card-->
                            <div class="item">
                                <div class="card text-center">
                                    <img src="{{ ('assets/produk/sch.png') }}" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <h5>Schweppes</h5>
                                        <p class="card-text">
                                            Schweppes hadir dalam
                                            berbagai rasa seperti Air Soda, Rasa Jahe dan Air Tonik yang dapat dinikmati
                                            sendiri, atau
                                            dikombinasikan dengan varian minuman. <br><br>
                                            <a href="/produk9" class="btn btn-primary">Details</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card text-center">
                                    <img src="{{ ('assets/produk/aw.png') }}" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <h5>A&W</h5>
                                        <p class="card-text">
                                            Merek minuman jenis root
                                            beer yang terutama tersedia di Amerika Serikat dan Kanada. <br><br>
                                            <a href="/produk8" class="btn btn-primary">Details</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card text-center">
                                    <img src="{{ ('assets/produk/fan.png') }}" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <h5>Fanta</h5>
                                        <p class="card-text">
                                            Fanta adalah merek tertua
                                            kedua The Coca-Cola Company dan merek terbesar kedua di luar Amerika
                                            Serikat.
                                            Fanta Orange adalah rasa utama dari Fanta.<br><br>
                                            <a href="/produk7" class="btn btn-primary">Details</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card text-center">
                                    <img src="{{ ('assets/produk/spri.png') }}" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <h5>Sprite</h5>
                                        <p class="card-text">
                                            Sprite adalah minuman
                                            ringan dengan aroma rasa lemon-jeruk terkemuka di dunia.<br><br>
                                            <a href="/produk6" class="btn btn-primary">Details</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card text-center">
                                    <img src="{{ ('assets/produk/fres.png') }}" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <h5>Frestea</h5>
                                        <p class="card-text">
                                            Frestea menggunakan standar kualitas tinggi
                                            The Coca-Cola Company,
                                            menggunakan teknologi tinggi dan didukung oleh proses produksi yang baik,
                                            demi memastikan
                                            bahwa setiap botol Frestea memilki kualitas yang sama.<br><br>
                                            <a href="/produk5" class="btn btn-primary">Details</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card text-center">
                                    <img src="{{ ('assets/produk/maid.png') }}" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <h5>Minute Maid</h5>
                                        <p class="card-text">
                                            Minute Maid Minuman yang
                                            mengandung susu asli dan sari buah bikin kombinasi yang Mix enaxx! Tersedia
                                            dalam 4 rasa
                                            menarik, jeruk, stroberi, mangga dan apel.<br><br>
                                            <a href="/produk4" class="btn btn-primary">Details</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card text-center">
                                    <img src="{{ ('assets/produk/coca.png') }}" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <h5>Coca Cola</h5>
                                        <p class="card-text">
                                            Coca-Cola adalah minuman
                                            ringan paling populer dan paling laris dalam sejarah, serta salah satu merek
                                            yang paling
                                            dikenal di dunia.<br><br>
                                            <a href="/produk3" class="btn btn-primary">Details</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card text-center">
                                    <img src="{{ ('assets/produk/aqua.png') }}" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <h5>Aquarius</h5>
                                        <p class="card-text">
                                            Aquarius adalah produk
                                            The Coca-Cola Company. Diperkenalkan pertama kali di Jepang pada tahun
                                            1980an,
                                            kini Aquarius hadir di Indonesia untuk menemanimu beraktifitas berat dan
                                            berkeringat.<br><br>
                                            <a href="/produk2" class="btn btn-primary">Details</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card text-center">
                                    <img src="{{ ('assets/produk/Ades.png') }}" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <h5>Ades</h5>
                                        <p class="card-text">
                                            Peluncuran Ades baru
                                            dari The Coca-Cola Company
                                            ini menampilkan Ades sebagai air minum dalam kemasan yang Murni, Aman dan
                                            Terpercaya, yang
                                            dijamin oleh The Coca-Cola Company.<br><br>
                                            <a href="/produk1" class="btn btn-primary">Details</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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


    <!-- JS SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel12/2.3.4/owl.carousel.js">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
        integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--Script-->
    <script type="text/javascript">
        var $owl = $('#carousel1');
        $owl.children().each(function (index) {
            $(this).attr('data-position', index);
        });

        $("#carousel1").owlCarousel({
            loop: false,
            center: true,
            margin: 0,
            responsiveClass: true,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                680: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });

        $(document).on('click', '.owl-item>div', function () {
            var $speed = 1000;
            $owl.trigger('to.owl.carousel', [$(this).data('position'), $speed]);
        });

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>
