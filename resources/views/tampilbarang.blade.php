<html>
<head>
	<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/css/master.css')}}" rel="stylesheet">
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
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/tampilbarang">Data Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tambahbarang">Tambah Barang</a>
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
	    <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
	  </ol>
	</nav>
	<h5>Data Barang</h5>
      <table class="table table-striped">
		<tr class="table-dark">
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Harga Barang</th>
			<th>Action</th>
		</tr>
		@foreach($barang as $b)
		<tr>
			<td>{{ $b->kode }}</td>
			<td>{{ $b->nama }}</td>
			<td>{{ $b->harga }}</td>
			<td>
				<a href="/editbarang/{{ $b->id }}" class="btn btn-warning">Edit</a> |
				<a href="/deletebarang/{{ $b->id }}" class="btn btn-danger">Delete</a>

			</td>
		</tr>
		@endforeach
	</table>
    </div>
    <div class="col-2">
    </div>
    
  </div>
</div>
</body>
