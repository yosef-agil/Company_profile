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
      <h1 class="text-center">Kesehatan</h1>
    </div>
    <div class="col-2">
    </div>

    <div class="row ">
    <div class="col-12">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      1. Bisakah saya mengkonsumsi Coca-Cola jika saya menderita diabetes? 
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Kami merekomendasikan bahwa siapa pun dengan penyakit diabetes dan memiliki pertanyaan tentang diet mereka untuk segera menghubungi dokter mereka masing-masing.
      Bagi mereka yang ingin mengurangi asupan gula dan kalori, termasuk juga mereka yang menderita diabetes, kami menawarkan berbagai minuman lezat dengan kadar dikurangi, rendah atau tanpa gula dan kalori, seperti Coca-Cola Light, Coca-Cola Zero Sugar, Itu yang menjadi alasan mengapa kami menawarkan berbagai produk minuman kami dalam ukuran yang bervariasi. Kami juga menyediakan informasi mengenai berapa banyak kandungan gula dan kalori dalam minuman kami sehingga konsumen dapat memilih produk minuman yang sesuai dengan kebutuhan mereka sendiri serta keluarga.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      2. Apakah Coca-Cola berdampak buruk bagi gigi saya? 
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Makanan atau minuman apa pun yang mengandung gula dan bersifat asam, termasuk minuman ringan, dapat mengakibatkan kerusakan gigi dan erosi, terutama jika anda mengonsuminya secara sering. Kunci dari kesehatan gigi yang baik adalah memiliki kebersihan gigi yang baik serta menyikat gigi Anda secara teratur. Penting juga untuk mengonsumsi makanan dan minuman seperti ini secukupnya
        Kami merekomendasikan bahwa siapa pun yang ingin mencari informasi lebih lanjut mengenai kesehatan gigi untuk segera menghubungi dokter gigi mereka masing-masing.
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
     3. Apakah minuman berkafein seperti Coca-Cola bisa dihitung sebagai asupan air harian yang direkomendasikan bagi saya?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <strong>Bisa.</strong> Minuman ringan bersoda, termasuk varian rendah dan tanpa gula, atau tanpa kalori, mengandung antara 85% hingga 99% air, yang berarti dapat membantu memuaskan dahaga dan menambah asupan cairan yang direkomendasikan setiap hari.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      4. Apakah minuman ringan dapat menyebabkan obesitas?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Masyarakat telah menikmati produk minuman kami selama lebih dari  132 tahun karena mereka menyukai rasanya yang menyegarkan. Penting bagi kami untuk memastikan bahwa para konsumen memiliki pilihan, itulah sebabnya mengapa kami juga menawarkan berbagai minuman nikmat dengan pilihan kurang, rendah atau tanpa gula dan kalori misalnya Coca-Cola Zero, Coca-Cola Light ataupun Frestea Low Calories. Kami tahu sebagian orang ingin menjaga asupan minuman mereka, sehingga kami menawarkan berbagai produk minuman kami dalam ukuran yang bervariasi. Kami juga menyediakan informasi mengenai berapa banyak kandungan gula dan kalori dalam minuman kami sehingga masyarakat dapat memilih produk minuman yang sesuai dengan kebutuhan mereka sendiri serta keluarga.
      </div>
    </div>
  </div>


</div>
    </div>
    
    
</div>
</div>

<!-- footer -->
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
