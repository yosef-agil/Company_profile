<html>

<head>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/master.css')}}" rel="stylesheet">
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/media.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"/>
    <title>Home</title>
</head>

<body>
    <!-- navbar -->
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="height: 80px; background-color: #191919">
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

    <div class="container-fluid" style="padding-top: 100px;padding-bottom: 100px; padding-left: 40px; background-color: #191919; ">
        <div class="row">
            <div class="col-md-6" style="padding-top: 100px; padding-left:80px;">
            <h1 style="color: white ; font-weight:bold; padding-right:150px;">The Coca-Cola 
            Company</h1>
            <p class="f">
            Coca-Cola adalah minuman ringan paling populer dan paling laris dalam sejarah, serta salah satu merek yang paling dikenal di dunia. <br><br>
            <a href="/produk" class="btn btn-light btn-hero">Baca lagi</a>
            </p>
            </div>
            <div class="col-md-6 bg-cola" style="padding-right:50px;">
                <img class="g" src="{{ ('assets/beranda/hero-sec.png') }}" alt="">
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="container-fluid" style="padding:40px 40px 40px 40px;">
        <div class="row align-self-center" style="margin:110px 8px 110px 8px;">

            <!-- Heading & title -->
            <div class="col-md-6" style="text-align: justify">
                <h2>Gandeng Anak-anak muda, Cola-cola Luncurkan Program Plastic Reborn 2.0</h2>
                <p>
                Program Plastic Reborn 2.0 adalah bagian dari visi World Without Waste yang diluncurkan oleh The Coca-Cola Company. 
                Visi global tersebut disusun oleh tiga pilar utama yakni design, collection, dan partnership.
                 </p>
            </div>

            <!-- image -->
            <div class="col-md-6" >
                <img style=" width:100%;" src="{{ ('assets/beranda/img1-beranda.png') }}" alt="">
            </div>
        </div>
    </div>


      <!--Reviews Section-->
      <section class="section-5">
        <div class="container-fluid px-lg-4 px-md-4" >
          <div class="row">
            <div class="col-md-12">
              <div class="testimonials">
                <div class="desc">
                  <h3 class="judul">LEADERSHIP</h3>
                </div>
                <div id="carousel1" class="owl-carousel">

                  <!--Testimonial Card-->
                  <div class="item">
                    <div class="card text-center">
                      <div class="card-body">
                      <img class="bor" src="{{ ('assets/beranda/james.webp') }}" alt="">
                        <h5 ><b>James Quincey</b> </h5>
                        <p>Chairman and Chief Executive Officer</p>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card text-center">
                    <div class="card-body">
                      <img class="bor" src="{{ ('assets/beranda/jhon.webp') }}" alt="">
                        <h5 ><b>John Murphy</b> </h5>
                        <p>Executive Vice President and Chief Financial Officer</p>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card text-center">
                    <div class="card-body">
                      <img class="bor" src="{{ ('assets/beranda/brian.webp') }}" alt="">
                        <h5 ><b>Brian Smith</b> </h5>
                        <p>President and Chief Operating Officer</p>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card text-center">
                    <div class="card-body">
                      <img class="bor" src="{{ ('assets/beranda/manuel.webp') }}" alt="">
                        <h5 ><b>Manuel Arroyo</b> </h5>
                        <p>Global Chief Marketing Officer</p>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card text-center">
                    <div class="card-body">
                      <img class="bor" src="{{ ('assets/beranda/stacy.webp') }}" alt="">
                        <h5 ><b>Stacy Apter</b> </h5>
                        <p>Vice President, Corporate Treasurer</p>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="card text-center">
                    <div class="card-body">
                      <img class="bor" src="{{ ('assets/beranda/barry.webp') }}" alt="">
                        <h5 >Barry Ballow</b> </h5>
                        <p>Vice President, Internal Audit</p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


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


    <!-- JS SCRIPT -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel12/2.3.4/owl.carousel.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" 
    integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--Script-->
    <script type="text/javascript">
      var $owl = $('#carousel1');
      $owl.children().each(function (index){
        $(this).attr('data-position', index);
      });

      $("#carousel1").owlCarousel({
        loop: false,
        center: true,
        margin: 0,
        responsiveClass: true,
        nav: false,
        responsive:{
          0:{
            items: 1
          },
          680:{
            items: 2
          },
          1000:{
            items: 3
          }
        }
      });

      $(document).on('click','.owl-item>div', function(){
        var $speed = 1000;
        $owl.trigger('to.owl.carousel', [$(this).data('position'), $speed]);
      });
    </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
