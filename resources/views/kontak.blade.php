<html>

<head>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/master.css')}}" rel="stylesheet">
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/media.css')}}">
</head>

<body>
    <!-- navbar -->
    <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="height: 80px;">
            <div class="container-fluid">
                <div class="brand">
                    <a class="navbar-brand" href="/home" style="padding-left: 50px;"><img
                            style=" width:10%;padding-bottom: 10px;" src="{{ ('assets/beranda/lg1.png') }}" alt=""></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav" style="padding-right: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/produk">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/artikel">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/kontak">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tentang">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/faq">FAQ</a>
                        </li>
                </div>
            </div>
        </nav>
    </div>

    <!-- content -->
    <div class="contac">
        <div class="container">
            <div class="row ct">
                <div class="col-md-6 form-contact">
                    <form method="POST" action="/insertpesan">
                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control form-control-sm" name="nama"
                                id="formGroupExampleInput" placeholder="nama lengkap">
                        </div>
                        <div class="col-md-12">
                            <label for="formGroupExampleInput" class="form-label">Email</label>
                            <input type="text" class="form-control form-control-sm" name="email"
                                id="formGroupExampleInput" placeholder="Email address">
                        </div>
                        <div class="col-md-12">
                            <label for="formGroupExampleInput" class="form-label">Alamat</label>
                            <input type="text" class="form-control form-control-sm" name="alamat"
                                id="formGroupExampleInput" placeholder="Masukan alamat">
                        </div>
                        <div class="col-md-12">
                            <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                            <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1"
                                placeholder="Masukan pesan anda di sini" rows="2"></textarea>
                        </div>
                        <button type="submit" value="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-4 align-middle contact">
                    <img src="{{ ('assets/tujuan/contact.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-07">
        <hr>
        <div class="container" style="padding-top: 20px; ">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <h2 class="footer-heading">Coca Cola Company</h2>
                    <p class="menu">
                        <a aria-current="page" style="text-decoration:none ;color: black" href="/home">Home</a> |
                        <a aria-current="page" style="text-decoration:none ;color: black" href="/produk">Produk Kami</a>
                        |
                        <a aria-current="page" style="text-decoration:none ;color: black" href="/artikel">Artikel</a> |
                        <a aria-current="page" style="text-decoration:none ;color: black" href="/kontak">Kontak Kami</a>
                        |
                        <a aria-current="page" style="text-decoration:none ;color: black" href="/tentang">Tentang</a> |
                        <a aria-current="page" style="text-decoration:none ;color: black" href="/faq">FAQ</a>
                    </p>

                    <a href="https://www.facebook.com/Coca-Cola/" class="fa fa-facebook" style="margin-right: 20px"></a>
                    <a href="https://twitter.com/CocaCola_ID" class="fa fa-twitter" style="margin-right: 20px"></a>
                    <a href="https://www.youtube.com/user/cocacola" class="fa fa-youtube"
                        style="margin-right: 20px"></a>

                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 text-center">
                    <p class="copyright">
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());

                        </script> | coca cola company <i class="ion-ios-heart" aria-hidden="true"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
