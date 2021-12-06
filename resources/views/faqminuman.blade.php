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
<div class="container" style="padding-top: 50px; ">
  <div class="row ">
    <div class="col-2">
    </div>
    <div class="col-8" >
      <h1 class="text-center">Minuman</h1>
    </div>
    <div class="col-2">
    </div>

    <div class="row ">
    <div class="col-12">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      1. Apa perbedaan antara Coca-Cola Zero Sugar dan Coca-Cola Light?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Rasanya berbeda.</strong> Kedua minuman tersebut bebas gula dan bebas kalori. Coca-Cola Zero Sugar memiliki tampilan dan rasa seperti Coca-Cola Classic, sementara Coca-Cola Light memiliki perpaduan rasa berbeda yang memberikannya rasa lebih ringan.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      2. Apa perbedaan antara Coca-Cola Classic, Coca-Cola Zero Sugar dan Coca-Cola Light?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Coca-Cola Classic adalah produk kola original dan ikonik kami yang diluncurkan pada tahun 1886. Coca-Cola Zero memiliki tampilan dan rasa seperti Coca-Cola Classic namun memiliki kandungan bebas gula.
        Coca-Cola Light juga merupakan minuman bebas gula namun memiliki rasa yang lebih ringan.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
     3. Berapa banyak minuman yang dijual The Coca-Cola Company di seluruh dunia setiap harinya?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Sekitar lebih dari 1.9 miliar porsi minuman kami telah dinikmati di lebih dari 200 negara setiap harinya.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      4. Apakah The Coca-Cola Company memproduksi minuman yang sama di setiap negara?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Tidak.</strong> Sebagian besar produk minuman kami, seperti Coca-Cola Classic, tersedia di lebih dari 200 negara di seluruh dunia. Sejumlah produk minuman kami hanya tersedia di negara-negara tertentu.Kami menyesuaikan produk minuman kami dengan selera lokal. Beberapa rasa lebih populer di satu negara dibandingkan dengan negara lain dan seringkali ada bahan yang berbeda di negara tertentu.
        Tahukah anda? Semua produk minuman kami di Indonesia dibuat dan dikemas di sini.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      5. Apakah Coca-Cola memiliki rasa yang berbeda di berbagai negara?
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Bahan dasar dan proses yang digunakan untuk membuat Coca-Cola sama di semua negara, meskipun cara setiap orang mempersepsikan rasa sangatlah berbeda. Sangat mungkin bagi minuman ringan yang sama memiliki rasa yang sedikit berbeda karena sejumlah faktor lain seperti suhu dimana minuman tersebut dikonsumsi, atau kondisi dimana minuman tersebut disimpan sebelum dikonsumsi.
      </div>
    </div>
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
