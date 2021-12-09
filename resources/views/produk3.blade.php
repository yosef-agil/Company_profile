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
  <div class="container">
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
      <div class="container-fluid">
        <div class="brand">
          <a class="navbar-brand" href="/home" style="padding-left: 50px;">Coca Cola</a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="padding-right: 100px;" >
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  active" href="/produk">Produk Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  " href="/artikel">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kontak">Kontak Kami</a>
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
  <div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <div class="container" style="padding-top: 100px;">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{ ('assets/produk/minuman/co.png') }}" class="d-block" alt="">
        </div>
        <div class="carousel-item">
        <img src="{{ ('assets/produk/minuman/cz.png') }}" class="d-block" alt="">
        </div>
        <div class="carousel-item">
        <img src="{{ ('assets/produk/minuman/cl.png') }}" class="d-block" alt="">
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
    <p>Minuman Berkarbonasi Rasa Kola</p>
    <p>Coca-Cola adalah minuman ringan paling populer dan paling laris dalam sejarah, serta salah satu merek yang paling dikenal di dunia.<br><br>
      Dibuat pada tahun 1886 di Atlanta, Georgia, oleh Dr. John S. Pemberton, Coca-Cola pertama kali ditawarkan sebagai Fountain Beverage di Jacob's Pharmacy dengan mencampur Coca-Cola syrup dengan air berkarbonasi.<br><br>
      Coca-Cola dipatenkan pada tahun 1887, terdaftar sebagai merek dagang pada tahun 1893 dan pada tahun 1895, itu dijual di setiap negara bagian dan teritori di Amerika Serikat.<br><br>
      Pada tahun 1899, The Coca-Cola Company memulai operasi pembotolan waralaba di Amerika Serikat dan pada tahun 1906 operasi pembotolan untuk Coca-Cola mulai berkembang secara internasional.<br><br>
      Diet Coke, juga dikenal sebagai Coca-Cola Light di beberapa pasar, adalah minuman ringan bebas gula dan kalori. 
      Pertama kali diperkenalkan di Amerika Serikat pada 9 Agustus 1982, sebagai merek baru pertama sejak 1886 untuk 
      menggunakan Merek Dagang Coca-Cola. Saat ini, Diet Coke / Coca-Cola Light adalah salah satu merek terbesar dan paling sukses dari The Coca-Cola Company, tersedia di lebih dari 150 pasar di seluruh dunia.<br><br>

      Coke Zero adalah produk terbesar Coca-Cola dalam 22 tahun dan diluncurkan pada tahun 2005, mencapai status miliaran dolar pada tahun 2007. Coca-Cola Zero menawarkan rasa Coca-Cola yang luar biasa, menyegarkan dan bebas gula.<br><br><br><br>

      Kemasan yang tersedia:<br><br>
      PET : 250 ml, 390 ml, 1L & 1.5L<br>
      Can : 250 ml & 330 ml<br>
      RGB : 200 ml & 295 ml<br>
      </p>
    </div>
    <div class="col-2">
    </div>
  </div>
  </div>

  <!-- footer -->
<section class="ftco-section">
			<div class="container" style="padding-top: 50px;">
          <div class="row ">
              <div class="col-12" >
                <hr size="5px">
                </div>
             </div>
				</div>
			</div>
		</section>
		<footer class="footer-07">
			<div class="container"  style="padding-top: 20px; ">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<h2 class="footer-heading">Coca Cola Company</h2>
						<p class="menu">
						  <a  aria-current="page" style="text-decoration:none ;color: black" href="/home">Home</a> |
						  <a  aria-current="page" style="text-decoration:none ;color: black" href="/produk">Produk Kami</a> |
							<a  aria-current="page" style="text-decoration:none ;color: black" href="/artikel">Artikel</a> |
							<a  aria-current="page" style="text-decoration:none ;color: black" href="/kontak">Kontak Kami</a> |
							<a  aria-current="page" style="text-decoration:none ;color: black" href="/tentang">Tentang</a> |
							<a  aria-current="page" style="text-decoration:none ;color: black" href="/faq">FAQ</a>
						</p>
					
            <a href="https://www.facebook.com/Coca-Cola/" class="fa fa-facebook"style="margin-right: 20px"></a>
            <a href="https://twitter.com/CocaCola_ID" class="fa fa-twitter" style="margin-right: 20px"></a>
            <a href="https://www.youtube.com/user/cocacola" class="fa fa-youtube" style="margin-right: 20px"></a>

					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-12 text-center">
						<p class="copyright">
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> | coca cola company <i class="ion-ios-heart" aria-hidden="true"></i></a>
					  </p>
					</div>
				</div>
			</div>
		</footer>

</div>
</body>
</html>
