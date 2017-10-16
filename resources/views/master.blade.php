
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">

    <title>Great American Power</title>

    <!-- Bootstrap core CSS -->
    {!! Html::style('css/bootstrap/bootstrap.min.css') !!}

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet">

    <!-- Custom styles for this template -->
    {!! Html::style('css/main.css') !!}
    {!! Html::style('css/font-awesome.css') !!}

    @yield('page-style')

  </head>

  <body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">{!! Html::image('images/gap-fcp-swoosh-trans.png', 'great-american-power', ['class' => 'top-logo']) !!}
        <a class="social-link" href="https://www.facebook.com/GreatAmericanPower/" target="_blank"><i class="fa fa-facebook"></i></a>
        <a class="social-link" href="https://twitter.com/GreatAmeriPower" target="_blank"><i class="fa fa-twitter"></i></a>
        <a class="social-link" href="https://www.linkedin.com/company/1855714" target="_blank"><i class="fa fa-linkedin"></i></a>
        <a class="social-link" href="https://www.pinterest.com/grtamerpwr/" target="_blank"><i class="fa fa-pinterest"></i></a>
  </div>

    <!--<div class="tagline-lower te xt-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Freedom | Choice | Power</div>-->

    <form id="navbar-form" class="navbar-form my-4">
      <input type="text" placeholder="Enter Zip Code" style="width: 200px;">
      <button type="submit" class="btn btn-default">Go</button>
    </form>

    <!-- Navigation -->
    <nav  id="navbar-links" class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Great American Power</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="/enroll">Enroll</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="/about-us">About</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    @yield('carousel-message')

    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Copyright &copy; Great American Power 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    {!! Html::script('js/popper/popper.js') !!}
    {!! Html::script('js/popper/popper.min.js') !!}
    {!! Html::script('js/jquery/jquery.min.js') !!}
    {!! Html::script('js/bootstrap/bootstrap.min.js') !!}

  </body>

</html>