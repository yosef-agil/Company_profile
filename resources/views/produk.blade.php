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

<!-- content -->
<div class="container" style="padding-top: 100px;">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
      <img style=" width:80%; margin-left: auto; margin-right: auto;" class="card-img-top" src="{{ ('assets/produk/Ades.png') }}" alt="">
        <div class="card-body">
          <h5 class="card-title">Ades</h5>
          <p class="card-text" style=" text-align: justify; padding-bottom:50px;">Peluncuran Ades baru dari The Coca-Cola Company 
            ini menampilkan Ades sebagai air minum dalam kemasan yang Murni, Aman dan Terpercaya, yang dijamin oleh The Coca-Cola Company.</p>
            <a href="/produk1" class="btn btn-primary">Details</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
      <img style=" width:80%;  margin-left: auto; margin-right: auto;" class="card-img-top" src="{{ ('assets/produk/aqua.png') }}" alt="">
        <div class="card-body">
          <h5 class="card-title">Aquarius</h5>
          <p class="card-text" style=" text-align: justify; padding-bottom:40px;">Aquarius adalah produk The Coca-Cola Company. Diperkenalkan pertama kali di Jepang pada tahun 1980an,
            kini Aquarius hadir di Indonesia untuk menemanimu beraktifitas berat dan berkeringat.</p>
            <a href="/produk2" class="btn btn-primary">Details</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
      <img style=" width:45%; margin-left: auto; margin-right: auto;" class="card-img-top" src="{{ ('assets/produk/coca.png') }}" alt="">
        <div class="card-body">
          <h5 class="card-title">Coca Cola</h5>
          <p class="card-text" style=" text-align: justify;padding-bottom:86px;">Coca-Cola adalah minuman ringan paling populer dan paling laris dalam sejarah, serta salah satu merek yang paling dikenal di dunia.</p>
          <a href="/produk3" class="btn btn-primary">Details</a>
        </div>
      </div>
    </div>
  </div>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
      <img style=" width:80%; margin-left: auto; margin-right: auto; " class="card-img-top" src="{{ ('assets/produk/maid.png') }}" alt="">
        <div class="card-body">
          <h5 class="card-title">Minute Maid</h5>
          <p class="card-text" style=" text-align: justify; padding-bottom:50px;">Minute Maid Minuman yang mengandung susu asli dan sari buah bikin kombinasi yang Mix enaxx! Tersedia dalam 4 rasa menarik, jeruk, stroberi, mangga dan apel.</p>
          <a href="#" class="btn btn-primary">Details</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
      <img style=" width:50%; margin-left: auto; margin-right: auto;" class="card-img-top" src="{{ ('assets/produk/fres.png') }}" alt="">
        <div class="card-body">
        <h5 class="card-title">Frestea</h5>
          <p class="card-text" style=" text-align: justify;">Frestea menggunakan standar kualitas tinggi The Coca-Cola Company, 
            menggunakan teknologi tinggi dan didukung oleh proses produksi yang baik, demi memastikan bahwa setiap botol Frestea memilki kualitas yang sama. </p>
            <a href="#" class="btn btn-primary">Details</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
      <img style=" width:82%;margin-left: auto; margin-right: auto;" class="card-img-top" src="{{ ('assets/produk/spri.png') }}" alt="">
        <div class="card-body">
        <h5 class="card-title">Sprite</h5>
          <p class="card-text" style=" text-align: justify;padding-bottom:90px;">Sprite adalah minuman ringan dengan aroma rasa lemon-jeruk terkemuka di dunia.</p>
            <a href="#" class="btn btn-primary">Details</a>
        </div>
      </div>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
    <img style=" width:54%;margin-left: auto; margin-right: auto;" class="card-img-top" src="{{ ('assets/produk/fan.png') }}" alt="">
      <div class="card-body">
      <h5 class="card-title">Fanta</h5>
        <p class="card-text" style=" text-align: justify;padding-bottom:10px;">Fanta adalah merek tertua kedua The Coca-Cola Company dan merek terbesar kedua  di luar Amerika Serikat.
           Fanta Orange adalah rasa utama dari Fanta. Hampir semua varian rasa buah ada dalam Fanta.</p>
           <a href="#" class="btn btn-primary">Details</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img style=" width:81%;margin-left: auto; margin-right: auto;" class="card-img-top" src="{{ ('assets/produk/aw.png') }}" alt="">
      <div class="card-body">
      <h5 class="card-title">A&W</h5>
        <p class="card-text" style=" text-align: justify;padding-bottom:80px;">Merek minuman jenis root beer yang terutama tersedia di Amerika Serikat dan Kanada. </p>
          <a href="#" class="btn btn-primary">Details</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img style=" width:55%;margin-left: auto; margin-right: auto;" class="card-img-top" src="{{ ('assets/produk/sch.png') }}" alt="">
      <div class="card-body">
        <h5 class="card-title">Schweppes</h5>
        <p class="card-text" style=" text-align: justify;padding-bottom:30px;">Schweppes hadir dalam berbagai rasa seperti Air Soda, Rasa Jahe dan Air Tonik yang dapat dinikmati sendiri, atau dikombinasikan dengan varian minuman.</p>
        <a href="#" class="btn btn-primary">Details</a>
      </div>
    </div>
  </div>
</div>
</div>

<section class="ftco-section">
			<div class="container" style="padding-top: 50px;">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center">
					</div>
				</div>
			</div>
		</section>
		<footer class="footer-07">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<h2 class="footer-heading">Coca Cola</h2>
						<p class="menu">
						  <a  aria-current="page" href="/home">Home</a>
						  <a  aria-current="page" href="/produk">Produk Kami</a>
							<a  aria-current="page" href="/artikel">Artikel</a>
							<a  aria-current="page" href="/tujuan">Tujuan</a>
							<a  aria-current="page" href="/tentang">Tentang</a>
							<a  aria-current="page" href="/faq">FAQ</a>
						</p>
					
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-12 text-center">
						<p class="copyright">
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | coca cola company <i class="ion-ios-heart" aria-hidden="true"></i></a>
					  </p>
					</div>
				</div>
			</div>
		</footer>

</body>
</html>
