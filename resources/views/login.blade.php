<html>

<head>
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/master.css')}}" rel="stylesheet">
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    <title>Login</title>

    <style>
      body{
        background-color:#191919;
      }
      .log-admin{
        background-color:#fff;
        padding:40px;
        border-radius:15px;
        box-shadow: 1px 5px 22px 0px rgba(58, 63, 78, 0);
      }
      .pass{
        padding-top:15px;
      }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-4 position-absolute top-50 start-50 translate-middle">
                <div class="log-admin">
                <form method="POST" action="/admincek">
                    {{ csrf_field() }}
                    <h3 style="text-align:center;">Log In - Admin</h3><br>
                    <hr>
                    <div class="col-md-12">
                        <label for="formGroupExampleInput" class="form-label">Username</label>
                        <input type="text" class="form-control" name="nama" id="formGroupExampleInput" placeholder="Your username..">
                    </div>
                    <div class="pass col-md-12">
                        <label for="formGroupExampleInput2" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="formGroupExampleInput2" placeholder="Input your password..">
                    </div>
                    <br>

                    <button type="submit" value="submit" class="btn btn-primary" style="width:100%;">Submit</button>
                </form>
                </div>
            </div>
        </div>
</body>
