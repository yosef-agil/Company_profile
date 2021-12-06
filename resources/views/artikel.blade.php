<html>
<head>
	<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/css/master.css')}}" rel="stylesheet">
	<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
</head height>
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
              <a class="nav-link " href="/produk">Produk Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/artikel">Artikel</a>
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
  <div class="row">
    <div class="col-2">
    </div>
    <div class="col-8">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active bg-dark">
      <img style=" width:100%;"  class="d-block w-100" src="{{ ('assets/produk/Ades.png') }}" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item bg-dark">
    <img style=" width:100%;"  class="d-block w-100" src="{{ ('assets/produk/Ades.png') }}" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item bg-dark">
    <img style=" width:100%;"  class="d-block w-100" src="{{ ('assets/produk/Ades.png') }}" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
    <div class="col-2">
    </div>
    <div class="row" style="padding-top: 50px;">
    <div class="col-2">
    </div>
    <div class="col-8">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ab fugit alias ut. Repellendus esse inventore id nihil accusantium a exercitationem quo libero, amet eaque.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ab fugit alias ut. Repellendus esse inventore id nihil accusantium a exercitationem quo libero, amet eaque.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ab fugit alias ut. Repellendus esse inventore id nihil accusantium a exercitationem quo libero, amet eaque.</p>
    </div>
    <div class="col-2">
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
				<div class="row mt-1">
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
