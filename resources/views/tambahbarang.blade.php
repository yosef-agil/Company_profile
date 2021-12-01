<html>
<head>
	<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
	<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Toko Mart</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/tampilbarang">Data Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/tambahbarang">Tambah Barang</a>
        </li>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-2">
    </div>
    <div class="col-8">

      <nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item active" aria-current="page">Tambah Barang</li>
	  </ol>
	</nav>

      <h5>Tambah Barang</h5>

      <form method="POST" action="/proses_insert">
		{{ csrf_field() }}

		  <div class="mb-3">
		    <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
		    <input type="number" name="kode_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

		    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
		    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

		    <label for="exampleInputEmail1" class="form-label">Harga Barang</label>
		    <input type="number" name="harga_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>
		  <button type="submit"  value="Tambah" class="btn btn-primary">Tambah</button>
	</form>
    </div>
    <div class="col-2">
    </div>
  </div>
</div>
	
</body>
</html>
