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
<div class="container" style="padding-top: 80px; ">
  <div class="row ">
    <div class="col-2">
    </div>
    <div class="col-8" >
      <h1 class="text-center">Isu</h1>
    </div>
    <div class="col-2">
    </div>

    <div class="row ">
    <div class="col-12">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      1. Apakah benar Coca-Cola mengandung kokain?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>Tidak. </strong>Coca-Cola tidak mengandung kokain atau zat berbahaya lainnya, dan kokain tidak pernah ditambahkan Coca-Cola.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      2. Apakah saya bisa menggunakan Coca-Cola sebagai pembersih rumah tangga?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Banyak orang yang selama ini menyebarkan rumor tentang Coca-Cola, karena sifat asamnya, dapat digunakan untuk membersihkan toilet dan baterai mobil yang berkarat, melonggarkan baut berkarat dan menghilangkan bintik-bintik karat dari bemper mobil, menghapus minyak dari pakaian dan membersihkan kabut dari kaca depan.

      Memang benar ada sedikit kandungan asam yang dapat dimakan di Coca-Cola, sama seperti yang ditemukan di banyak makanan dan minuman lain. Dan sangat mungkin bahwa asam yang dapat dimakan ini mampu melakukan hal-hal yang telah dirumorkan ini. Tetapi kami tidak merekomendasikan anda untuk menggunakannya demi tujuan ini. Tetap gunakan produk pembersih biasa.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
     3. Apakah benar anda bisa menggunakan Coca-Cola untuk membersihkan toilet?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Bisa saja, tapi akan lebih baik jika anda menggunakan pembersih toilet. Coca-Cola mengandung asam fosfat yang memberikannya rasa yang tajam, dan asam tersebut dapat membantu membersihkan kotoran. Anda akan mendapatkan efek yang sama jika menggunakan makanan dan minuman berasam lainnya, seperti jus lemon. Akan tetapi, Coca-Cola tidak efektif dalam membunuh kuman, dan terdapat banyak produk yang jauh lebih baik untuk membersihkan toilet.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      4. Apakah benar gigi akan larut jika dibiarkan semalam di dalam Coca-Cola?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>Tidak, </strong>Coca-Cola tidak akan melarutkan gigi dalam semalam. Memang benar bahwa makanan atau minuman yang mengandung gula dan bersifat asam, termasuk minuman ringan, dapat berkontribusi pada kerusakan gigi dan erosi, terutama jika Anda sering mengekonsumsinya. Kunci untuk kesehatan gigi yang baik adalah dengan merawat kebersihan gigi yang baik dan menyikat gigi Anda secara teratur. Penting juga untuk memiliki makanan dan minuman secukupnya.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      5. Benarkah anda bisa meninggal karena makan Mentos dan minum Coke pada saat yang bersamaan?
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Ini merupakan mitos yang beredar di masyarakat. Memang benar memasukkan Mentos ke dalam botol Coca-Cola /Coca-Cola Light/ minuman berkarbonasi lain akan menyebabkan air mancur soda yang meletus dari botol. Namun, anda tidak akan mendapatkan efek yang sama jika Mengonsumsi Mentos setelah minum Coca-Cola /Coca-Cola Light/ minuman berkarbonasi lain. Letusan yang anda dapatkan ketika mencampur Mentos dan Coca-Cola /Coca-Cola Light / minuman berkarbonasi lain dihasilkan oleh lapisan kasar permen, yang menyebabkan begitu banyak gelembung terbentuk secara cepat di permukaannya saat dimasukkan ke dalam minuman berkarbonasi. Namun, lapisan kasar permen tersebut akan segera larut saat anda mengonsuminya. Jadi, anda tidak akan mendapatkan reaksi yang sama di perut anda. 
    </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
      6. Apakah benar mengonsumsi durian sambil meminum Coke dapat menyebabkan kematian?
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Terima kasih atas pertanyaan anda. Kami dapat memastikan bahwa mengonsumsi durian dan meminum Coca-Cola pada saat yang bersamaan tidak membahayakan kesehatan anda.
    </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
      7. Apa yang terjadi satu jam setelah anda minum sekaleng Coca-Cola? / Apa yang terjadi setelah meminum Coca-Cola?
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Masyarakat telah menikmati Coca-Cola secara aman selama lebih dari 130 tahun. Coca-Cola memang memiliki kandungan gula dan kafein, dan seperti minuman ringan lainnya, dapat dinikmati dalam jumlah secukupnya sebagai bagian dari gaya hidup yang seimbang. Kami menyediakan berbagai pilihan minuman, termasuk produk rendah gula, bebas gula dan bebas kafein, sehingga anda dapat memilih produk yang tepat sesuai kebutuhan anda.
    </div>
    </div>
  </div>
</div>
</div>
  
</div>
</div>

<!-- footer -->
<section class="ftco-section">
        <div class="container" style="padding-top: 50px;">
        </div>
        </div>
    </section>
    <div class="container-fluid" style="padding-bottom: 50px; padding-top: 50px; background-color: #333333 ; color: white;">
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
