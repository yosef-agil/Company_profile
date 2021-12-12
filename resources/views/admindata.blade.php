<html>
<head>
	<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
  	<link href="{{asset('/css/master.css')}}" rel="stylesheet">
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
  <!-- navbar -->
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
                    <h4>Data Admin</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="/tambahdata" class="btn btn-danger">Tambah data</a>
                </div>
                <hr style="margin-top:25px;">
            </div>

            <div class="col-md-12">
                <div class="table-responsive-sm">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nama Pengguna</td>
                                <td>Password</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tb_admin as $b)
                            <tr class="data-table">
                                <td> {{ $b->id }} </td>
                                <td> {{ $b->nama }} </td>
                                <td> {{ $b->password }} </td>
                                <td>
                                    <a href="/editdata/{{ $b->id }}" class="btn btn-warning">Edit</a>
				                    <a href="/deletedata/{{ $b->id }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
