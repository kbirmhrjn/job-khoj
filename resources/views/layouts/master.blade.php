<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Job Khoj | A Comprehensive Job Portal</title>
    <!-- Core CSS -->
    <link href="/css/app.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Navigation -->
    <header>
      {{-- <nav class="navbar navbar-inverse no_radius" role="navigation"> --}}
          <div class="container">
            <h1><a href="/"><img src="/img/logo.png?cache" alt="Logo" id="logo" /></a></h1>
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-navigation">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <nav class="collapse navbar-collapse" id="menu-navigation">
                  <ul class="nav navbar-nav">
                      <li>
                          <a href="/">Home</a>
                      </li>
                      <li>
                          <a href="#">About</a>
                      </li>
                      <li>
                          <a href="#">Services</a>
                      </li>
                      <li>
                          <a href="#">Contact</a>
                      </li>
                  </ul>
              </nav>
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.container -->
      {{-- </nav> --}}
    </header>
    <!-- Page Content -->
    <div class="container">
        @yield('content')
        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Job Khoj 2015</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>
    </div>
    <!-- /.container -->
    <!-- ApplicationJs -->
    <script src="/js/app.js"></script>
</body>
</html>
