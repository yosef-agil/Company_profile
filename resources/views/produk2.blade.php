<html>
<head>
	<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/css/master.css')}}" rel="stylesheet">
	<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
  
</head>
<body>
  <!-- navbar -->
  <div class="container">
  <nav class="navbar fixed-top navbar-expand-lg navbar-light"  style="height: 80px;">
      <div class="container-fluid">
        <div class="brand">
            <a class="navbar-brand" href="/home" style="padding-left: 50px;">Coca Cola</a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="padding-right: 100px;" >
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/produk">Produk Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/artikel">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/tujuan">Tujuan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/tentang">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/faq">FAQ</a>
            </li>
        </div>
      </div>
    </nav>
  </div>
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
          <img src="{{ ('assets/produk/minuman/aq.png') }}" class="d-block" alt="">
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
    <div class="col-8" style="text-align: justify;" >
    <p>Minuman Isotonik</p>
    <p>Aquarius adalah produk The Coca-Cola Company. Diperkenalkan pertama kali di Jepang pada tahun 1980an, kini Aquarius hadir di Indonesia untuk menemanimu beraktifitas berat dan berkeringat. 
    Kandungan elektrolitnya membantu menggantikan cairan tubuh yang hilang saat berkeringat.<br><br><br><br>

    Kemasan yang tersedia :<br><br>
    PET   : 500 ml
      </p>
    </div>
    <div class="col-2">
    </div>
  </div>
  </div>

</div>
</body>
</html>
