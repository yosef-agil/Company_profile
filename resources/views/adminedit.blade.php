<html>
<head>
	<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
	<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
      	<form method="POST" action="/proses_edit">
		{{ csrf_field() }}

		@foreach($hasil as $h)
		<input type="hidden" name="id" value="{{ $h->id }}">

		<div class="mb-3">

		    <label for="exampleInputEmail1" class="form-label">Nama Admin</label>
		    <input type="text" name="nama" value="{{ $h->nama }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

		    <label for="exampleInputEmail1" class="form-label">Password</label>
		    <input type="number" name="password" value="{{ $h->password }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>
		  <button type="submit"  value="Edit" class="btn btn-primary">Edit</button>
		
		@endforeach

	</form>
</body>
</html>
