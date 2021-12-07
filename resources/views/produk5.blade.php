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
        <img src="{{ ('assets/produk/minuman/f1.png') }}" class="d-block" alt="">
        </div>
        <div class="carousel-item">
        <img src="{{ ('assets/produk/minuman/f2.png') }}" class="d-block" alt="">
        </div>
        <div class="carousel-item">
        <img src="{{ ('assets/produk/minuman/f3.png') }}" class="d-block" alt="">
        </div>
        <div class="carousel-item">
        <img src="{{ ('assets/produk/minuman/f4.png') }}" class="d-block" alt="">
        </div>
        <div class="carousel-item">
        <img src="{{ ('assets/produk/minuman/f5.png') }}" class="d-block" alt="">
        </div>
        <div class="carousel-item">
        <img src="{{ ('assets/produk/minuman/f6.png') }}" class="d-block" alt="">
        </div>
        <div class="carousel-item">
        <img src="{{ ('assets/produk/minuman/f7.png') }}" class="d-block" alt="">
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
    <p>Minuman Teh </p>
    <p>Jasmine: Minuman Teh Melati<br>
      Green: Minuman Teh Hijau<br>
      Green Honey: Minuman Teh Hijau Rasa Madu<br>
      Apple: Minuman The Rasa Apel<br>
      Passionfruit: Minuman Teh Rasa Markisa<br>
      Low Calorie: Minuman Teh Beraroma Melati Rendah Energi<br>
      Milk Tea Brown Sugar: Minuman Teh Susu Gula Aren<br><br>

      Frestea diproduksi di bawah otoritas Pacific Refreshments Pte. Ltd dengan menggunakan standar kualitas tinggi The Coca-ColaCompany,
       menggunakan teknologi tinggi dan didukung oleh proses produksi yang baik, demi memastikan bahwa setiap botol Frestea memilki kualitas yang sama. <br><br>

      Varian rasa :<br>
      Jasmine, Green, Green Honey, Apel, Markisa, Rendah Kalori, dan Teh Susu Gula Aren
     <br><br><br><br>

      Kemasan yang tersedia :<br><br>
      PET : 500 ml, 350 ml, & 900 ml<br>
      RGB : 220 ml<br>
      CUP : 296 ml<br>
      </p>
    </div>
    <div class="col-2">
    </div>
  </div>
  </div>

</div>
</body>
</html>
