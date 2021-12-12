<html>
<head>
	<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/css/master.css')}}" rel="stylesheet">
	<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
  <!-- navbar -->
  <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="height: 80px; background-color:rgb(254, 254, 254)">
            <div class="container-fluid">
                <div class="brand">
                    <a class="navbar-brand" href="/home" style="padding-left: 50px;"><img style=" width:30%;" src="{{ ('assets/beranda/com.png') }}" alt=""></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav" style="padding-right: 100px;">
                        <li class="nav-item" style="padding-right: 100px;">
                            <a class="nav-link active" style="color: rgb(255, 0, 0); padding-right: 100px;" aria-current="page" href="/home">Data Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: rgb(255, 0, 0);" href="/produk">Data Admin</a>
                        </li>
                </div>
            </div>
        </nav>
    </div>

<div class="container" style="padding-top: 150px;">
  <div class="row">
    <div class="col-1">
    </div>
    <div class="col-10">
		<center>
		<table class="table table-striped" style="width: 550px;">
		<tr class="table-dark">
			<th>id</th>
			<th>Nama Pengguna</th>
			<th>Password</th>
			<th>Action</th>
		</tr>
		</center>
		@foreach($tb_admin as $b)
		<tr>
			<td>{{ $b->id }}</td>
			<td>{{ $b->nama }}</td>
			<td>{{ $b->password }}</td>
			<td>
				<a href="/editdata/{{ $b->id }}" class="btn btn-warning">Edit</a> |
				<a href="/deletedata/{{ $b->id }}" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="/tambahdata" class="btn btn-primary" style="width: 150px;">Tambah</a>
    </div>
    <div class="col-1">
    </div>
  </div>
</div>
</body>
