<html>
<head>
	<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/css/master.css')}}" rel="stylesheet">
	<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-1">
    </div>
    <div class="col-10">
      <table class="table table-striped">
		<tr class="table-dark">
			<th>id</th>
			<th>Nama Pengguna</th>
			<th>Email Pengguna</th>
			<th>Alamat Pengguna</th>
			<th>Pesan</th>
			<th>Action</th>
		</tr>
		@foreach($tb_user as $b)
		<tr>
			<td>{{ $b->id }}</td>
			<td>{{ $b->nama }}</td>
			<td>{{ $b->email }}</td>
			<td>{{ $b->alamat }}</td>
			<td>{{ $b->pesan }}</td>
			<td>
				<a href="/deleteuser/{{ $b->id }}" class="btn btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
    </div>
    <div class="col-1">
    </div>
    
  </div>
</div>
</body>
