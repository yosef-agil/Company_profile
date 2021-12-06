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
              <a class="nav-link active" aria-current="page" href="/home">Home</a>
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
              <a class="nav-link" href="/faq">FAQ</a>
            </li>
        </div>
      </div>
    </nav>
  </div>

<!-- content -->
<div class="container" style="padding-top: 50px;">
  <div class="row align-self-center" style="margin:110px 8px 110px 8px;">

     <!-- Heading & title -->
      <div class="col-md-6">
        <h2>Gandeng Anak-anak muda, Cola-cola Luncurkan Program Plastic Reborn 2.0</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Fuga ab fugit alias ut. Repellendus esse inventore id nihil 
          accusantium a exercitationem quo libero, amet eaque.
        </p>
        <button class="btn btn-primary"><a href="/"></a>Baca lagi</button>
      </div>

      <!-- image -->
      <div class="col-md-6">
        <img style=" width:100%;" src="{{ ('assets/beranda/img1-beranda.png') }}" alt="">
      </div>

  </div>
</div>
	
</body>
</html>
