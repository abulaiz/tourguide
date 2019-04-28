<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../../assets2/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../../assets2/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Login | SIAKAD
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../../../assets2/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../../assets2/demo/demo.css" rel="stylesheet" />
</head>

<body class="" style="
    background: url(../././assets2/img/bg.jpg) center;
    background-size: auto;
    background-size: cover;
">
  <div class="wrapper ">

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div style="margin-top: 8%;" class="col-lg-6 offset-lg-3 col-md-12">
            <div class="card">
              <div class="card-header card-header-warning" style="background: rgba(0, 0, 0, 0) linear-gradient(to right, rgb(242, 113, 33), rgb(233, 64, 87), rgb(164, 58, 140)) repeat scroll 0% 0% !important">
                <h4 class="card-title">Login</h4>
                <p class="card-category">Masuk sebagai admin {{ config('app.name') }}</p>
              </div>
              <div class="card-body">
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                      <label class="bmd-label-floating">Email</label>
                      <input type="text" placeholder="Type Email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif                      
                    </div>   

                    <div class="form-group">
                      <label class="bmd-label-floating">Password</label>
                      <input type="password" placeholder="Type Password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    </div>     
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    <button type="submit" class="btn btn-danger pull-right">Login</button>    
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif                                 
                    <div class="clearfix"></div>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>      

  </div>

  <!--   Core JS Files   -->
  <script src="../../../assets2/js/core/jquery.min.js"></script>
  <script src="../../../assets2/js/core/popper.min.js"></script>
  <script src="../../../assets2/js/core/bootstrap-material-design.min.js"></script>

</body>

</html>
