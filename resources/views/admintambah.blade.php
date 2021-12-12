<html>
<head>
	<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
	<script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>

	   <style>
        header {
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            overflow-x: hidden;
        }

        main {
            margin-left: 260px;
            padding: 30px 30px;
        }

        .nav-link:hover {
            background-color: #525252 !important
        }

        .nav-link .fa {
            transition: all 1s
        }

        .nav-link:hover .fa {
            transform: rotate(360deg)
        }

        td {
            font-size: 14px;
        }
    </style>
</head>
<body>
	<header>
        <div class="sidebar-menu">
            <!-- side bar menu -->
            <div class="d-flex flex-column vh-100 flex-shrink-0 p-3 text-white bg-dark" style="width: 250px;">
                <a href="/" style="margin-left:16px;" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none fs-4">
                    Cola<span class="fs-4" style="color:#75CB79;"></span> </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li> <a href="/" class="nav-link text-white" aria-current="page">Dashboard</a> </li>
                    <li class="nav-item"> <a href="/" class="nav-link active">Data admin</a> </li>
                    <li> <a href="/" class="nav-link text-white">Data user</a> </li>
                    <li> <a href="/" class="nav-link text-white">Report</a> </li>
                </ul>
            </div>
        </div>
    </header>


    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Edit data</h4>
                </div>
                <hr style="margin-top:25px;">
            </div>

            <div class="col-md-12">
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
            </div>
        </div>
    </main>
</body>
</html>
