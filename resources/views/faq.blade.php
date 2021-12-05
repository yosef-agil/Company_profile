<html>
<head>
	<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/css/master.css')}}" rel="stylesheet">
	<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
  <!-- navbar -->
  <div class="container">
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
      <div class="container-fluid">
        <div class="brand">
           <a class="navbar-brand" href="#" style="padding-left: 50px;">Coca Cola</a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/produk">Produk Kami</a>
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
              <a class="nav-link active" href="/faq">FAQ</a>
            </li>
        </div>
      </div>
    </nav>
  </div>

<!-- content -->
<div class="container" style="padding-top: 100px;">
  <div class="row ">
    <div class="col-2">
    </div>
    <div class="col-8" >
      <h1 class="text-center">Informasi Coca Cola</h1>
    </div>
    <div class="col-2">
    </div>
  </div>
  <div class="card text-center" style="padding-top: 30px;">
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
    <a href="/faqminuman"> <img src="assets/FAQ/1.png" class="card-img-top" > </a>
      <div class="card-body" >
        <h3 class="card-title" >Minuman</h3>
        <p class="card-text">Apa perbedaan antara Coca-Cola Zero Sugar dan Coca-Cola Light?</p>
        <a href="/faqminuman" class="btn btn-primary">Selanjutnya</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <a href="/faqkomposisi"> <img src="assets/FAQ/2.png" class="card-img-top" > </a>
      <div class="card-body">
      <h3 class="card-title">Komposisi</h3> 
        <p class="card-text">Berapakah kandungan gula yang terdapat di Coca-Cola Classic?</p>
        <a href="/faqkomposisi" class="btn btn-primary">Selanjutnya</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <a href="/faqkesehatan"><img src="assets/FAQ/3.png" class="card-img-top" > </a>
      <div class="card-body">
      <h3 class="card-title">Kesehatan</h3>
        <p class="card-text">Berapakah kandungan gula yang terdapat di Coca-Cola Classic?</p>
        <a href="/faqkesehatan" class="btn btn-primary">Selanjutnya</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <a href="/faqsejarah"><img src="assets/FAQ/4.png" class="card-img-top" > </a>
      <div class="card-body">
      <h3 class="card-title">Sejarah</h3> 
        <p class="card-text">Siapa yang pertama kali menemukan Coca-Cola?</p>
        <a href="/faqsejarah" class="btn btn-primary">Selanjutnya</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <a href="/faqisu"> <img src="assets/FAQ/5.png" class="card-img-top" > </a>
      <div class="card-body">
      <h3 class="card-title">Isu dan Rumor</h3>
        <p class="card-text">Apakah benar Coca-Cola mengandung kokain?</p>
        <a href="/faqisu" class="btn btn-primary">Selanjutnya</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <a href="/faqhubungi"><img src="assets/FAQ/6.png" class="card-img-top"> </a>
      <div class="card-body">
      <h3 class="card-title">Hubungan Kami</h3>
        <p class="card-text">Coca-Cola Indonesia, Coca-Cola Foundation Indonesia, Coca-Cola Amatil Indonesia</p>
        <a href="/faqhubungi" class="btn btn-primary">Selanjutnya</a>
      </div>
    </div>
  </div>
  </div>
</div>
</div>
	
</body>
</html>
