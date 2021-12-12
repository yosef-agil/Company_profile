<html>

<head>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/master.css')}}" rel="stylesheet">
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-2">
            </div>
            <div class="col-8">
			<form method="POST" action="/admincek">
                 {{ csrf_field() }}
                <label for="exampleFormControlInput1" class="form-label">UserName</label>
                <input type="text" class="form-control"  name="nama" id="exampleFormControlInput1" placeholder="UserName">

                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <input type="password" class="form-control"  name="password" id="inputPassword" placeholder="Password">

				<button type="submit" value="submit" class="btn btn-primary">Submit</button>
				</form>
			<div class="col-2">
			</div>
            </div>
        </div>
</body>
