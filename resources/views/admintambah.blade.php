<html>
<head>
	<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
	<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
      	<form method="POST" action="/formdata">
		{{ csrf_field() }}
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">id Admin</label>
		    <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

		    <label for="exampleInputEmail1" class="form-label">Nama Admin</label>
		    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

		    <label for="exampleInputEmail1" class="form-label">Password</label>
		    <input type="text" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>
		  <button type="submit"  value="Tambah" class="btn btn-primary">Tambah</button>
	</form>
</body>
</html>
