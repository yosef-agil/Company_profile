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
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{ ('assets/produk/minuman/ft1.png') }}" class="d-block" alt="">
        </div>
        <div class="carousel-item">
        <img src="{{ ('assets/produk/minuman/ft2.png') }}" class="d-block" alt="">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
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
    <br><br>
    <p>Minuman Berkarbonasi</p>
      Strawberry: Minuman Berkarbonasi Rasa Stroberi<br>
      Orange: Minuman Berkarbonasi Rasa Jeruk<br><br>

    <p>Diperkenalkan pada tahun 1940, Fanta adalah merek tertua kedua The Coca-Cola Company dan merek terbesar kedua  di luar Amerika Serikat.
      Fanta Orange adalah rasa utama dari Fanta. Hampir semua varian rasa buah ada dalam Fanta.
      Dikonsumsi lebih dari 130 juta kali setiap hari di seluruh dunia, konsumen menyukai Fanta karena rasa buahnya.<br><br><br><br>

      Kemasan yang tersedia:<br><br>
      PET : 250 ml, 390 ml, 1L &1.5L<br>
      Can: 250 ml & 330 ml<br>
      RGB: 200 ml & 295 ml<br>
      </p>
    </div>
    <div class="col-2">
    </div>
  </div>
  </div>

</div>
</body>
</html>
