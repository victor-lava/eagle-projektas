<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Eagle - @yield('title')</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Themesdesign" />

        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

        <!-- Bootstrap Css-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

        <!-- Materialdesign icon Css-->
        <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
        <!-- Pe 7 icon Css-->
        <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css" />

        <!-- Custom Css -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>

      <!-- Start Navbar -->
      <nav class="navbar navbar-expand-lg navbar-default navbar-custom navbar-light">
          <div class="container">
              <a class="navbar-brand logo" href="index.html">Eagle</a>

              <div class="navbar-header">

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="mdi mdi-menu"></span>
              </button>
              </div>

              <div class="collapse navbar-collapse" id="navbar-collapse-1">
                  <ul class="nav navbar-nav ml-auto">
                      <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                      <li class="nav-item"><a class="nav-link" href="work.html">Work</a></li>
                      <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                      <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                  </ul>
              </div>

          </div>
      </nav>
      <!-- End Navbar -->

      @yield('content') {{-- sekcijos pavadinimas, kurios kodas bus įterptas --}}

      <!-- FOOTER -->
      <footer class="footer">
          <div class="container">

            <div class="row">
              <div class="col-lg-12">
                <div class="text-center">
                  <div class="logo center-block"><img src="images/logo.png" alt="" class=""></div>

                  <ul class="list-inline social-circle margin-t-30">
                    <li class="list-inline-item"><a href=""> <i class="mdi mdi-facebook"></i> </a></li>
                    <li class="list-inline-item"><a href=""> <i class="mdi mdi-twitter"></i> </a></li>
                    <li class="list-inline-item"><a href=""> <i class="mdi mdi-google-plus"></i> </a></li>
                    <li class="list-inline-item"><a href=""> <i class="mdi mdi-apple"></i> </a></li>
                    <li class="list-inline-item"><a href=""> <i class="mdi mdi-instagram"></i> </a></li>
                  </ul>

                  <p class="text-muted m-b-0 copyright-txt"> © Eagle 2019- Design by Themesdesign</p>

                </div>
              </div>
            </div>
            <!-- end row -->

          </div>
      </footer>

      <!-- END FOOTER -->

      <!-- JAVASCRIPTS -->
      <script src="js/jquery-2.1.4.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- isotope filter plugin -->
      <script src="js/isotope.pkgd.min.js"></script>
      <script src="js/portfolio-filter.js"></script>
      <script src="js/app.js"></script>
    </body>
</html>
