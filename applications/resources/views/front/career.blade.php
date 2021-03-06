<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Toby's Estate Indonesia</title>
  <meta name="google-site-verification" content="Nh4YlU54424bnwr7LXglUypRD8uldfvXa5btnnAgs9I" />
  <meta name="description" content="Welcome to the Toby's Estate Indonesia where you will find everything you need to know about our coffee, tea, chocolate and more!">
  <meta name="keywords" content="Toby's Estate Indonesia, coffee, tobys, estate, coffee indonesia, tobysestate, Tobys Estate Indonesia, 'barisata', 'career'"/>
  <meta http-equiv="Content-Language" content="id" />
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="all" />

  <link rel="shortcut icon" type="image/png" href="./img/icon.png"/>

  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('fonts/fonts.css') }}" rel="stylesheet">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-85998402-1', 'auto');
    ga('send', 'pageview');

  </script>
  <!-- Custom CSS -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body id="home" class="body-mobile" data-spy="scroll" data-target=".navbar-fixed-top">

  <nav class="navbar navbar-default navbar-fixed-top navbar-fixed-top-toby top-nav-collapse" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="logo-center">
              <div class="logo-homex-mobile">
                <a href="{{ route('index') }}"><img src="{{ asset('img/new-logo-mob.png') }}" alt="Toby's Estate Indonesia" /></a>
              </div>
              <div class="social-head">
                <a href="https://www.facebook.com/tobysestateid"><img src="{{ asset('img/social-fb.png') }}" onmouseover="this.src='./img/social-fb-a.png'" onmouseout="this.src='./img/social-fb.png'" /></a>
                <a href="https://www.instagram.com/tobysestateid/"><img src="{{ asset('img/social-ig.png') }}" onmouseover="this.src='./img/social-ig-a.png'" onmouseout="this.src='./img/social-ig.png'"/></a>
                <a href="mailto:contact@tobysestatecoffee.co.id"><img src="{{ asset('img/social-email.png') }}" onmouseover="this.src='./img/social-email-a.png'" onmouseout="this.src='./img/social-email.png'"/></a>
              </div>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a class="page-scroll" href="#home">Home</a></li>
                <li><a class="page-scroll" href="#about">About</a></li>
                <li><a class="page-scroll" href="#gallery">Gallery</a></li>
                <li><a class="page-scroll" href="#findus">Location</a></li>
                <li><a class="page-scroll" href="#">Career</a></li>
                <li><a class="" href="mailto:contact@tobysestatecoffee.co.id">Contact Us</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
      <!-- /.container -->
  </nav>

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top navbar-toby navbar-toby-white container-center" role="navigation">
      <div class="container container-nav-menu">
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle navbar-toggle-desktop" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a href="{{ route('index')}}"><div class="logo-homex"></div></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav navbar-navone">
              <li><a class="page-scroll" href="{{ route('index')}}#home">Home</a></li>
              <li><a class="page-scroll" href="{{ route('index')}}#about">About</a></li>
              <li><a class="page-scroll" href="{{ route('index')}}#gallery">Gallery</a></li>
              <li><a class="page-scroll" href="{{ route('index')}}#findus">Location</a></li>
              <li class="active"><a class="page-scroll" href="#career">Career</a></li>
              <li><a class="" href="mailto:contact@tobysestatecoffee.co.id">Contact Us</a></li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
  </nav>
  <!-- Navigation -->

	<section id="career" class="career-section">

    <div class="container-fluid container-career">
      <div class="container">

        <div class="col-md-6 col-mdcareer-left">
          <img src="{{ asset('img/career-img-left.png') }}" alt="Toby's Estate Indonesia">
        </div>

        <div class="col-md-6 col-mdcareer-right">
          <img src="{{ asset('img/logo-hitam.png') }}" width="154px" height="71px" alt="Toby's Estate Indonesia"/>

          <h1>we’re hiring !</h1>
          <span></span>

          <h4>positions available</h4>

          <h3><a href="http://www.jobstreet.co.id/id/job/1978345/sources/1/origin/id" target="_blank" class="listjob">Executive Chef</a></h3>
          <h3><a href="http://www.jobstreet.co.id/id/job/1976572/sources/1/origin/id" target="_blank" class="listjob">Operational Manager</a></h3>
          <h3><a href="http://www.jobstreet.co.id/id/job/1977526/sources/1/origin/id" target="_blank" class="listjob">Sales and Distribution Manager</a></h3>
          <h3><a href="http://www.jobstreet.co.id/id/job/1976577/sources/1/origin/id" target="_blank" class="listjob">Restaurant/Cafe/Outlet Manager</a></h3>
          <h3><a href="http://www.jobstreet.co.id/id/job/1977543/sources/1/origin/id" target="_blank" class="listjob">Graphic Designer and Social Media Manager</a></h3>
          <h3><a href="http://www.jobstreet.co.id/id/job/1976580/sources/1/origin/id" target="_blank" class="listjob">Brand, Marketing, and Promotion Manager</a></h3>

          <br />
          <span></span>

          <h2>Send your CV to <a href="mailto:tobysestate@normi.co.id" class="sendcv">tobysestate@normi.co.id</a></h2>

        </div>

      </div>
    </div>

  </section><!-- home-section -->
  <div class="clearfix"></div>

  <div class="footer">

    <div class="container-fluid container-footer">
      <div class="container-center">

        <div class="row">
          <div class="col-md-4 say-hello">
            <h3><b>Say Hello</b></h3>
            <ul>
              <li><a href="mailto:contact@tobysestatecoffee.co.id">Contact Us</a></li>
              <li><a href="http://www.tobysestatecoffee.co.id/#findus">Cafe Locations</a></li>
              <li><a href="mailto:contact@tobysestatecoffee.co.id">Join Our Team</a></li>
            </ul>
          </div>

          <div class="col-md-4 social">
            <div class="img-footer"></div>
            <a href="https://www.facebook.com/tobysestateid"><img src="{{ asset('img/social-fb.png') }}" onmouseover="this.src='./img/social-fb-a.png'" onmouseout="this.src='./img/social-fb.png'" /></a>
            <a href="https://www.instagram.com/tobysestateid/"><img src="{{ asset('img/social-ig.png') }}" onmouseover="this.src='./img/social-ig-a.png'" onmouseout="this.src='./img/social-ig.png'"/></a>
            <a href="mailto:contact@tobysestatecoffee.co.id"><img src="{{ asset('img/social-email.png') }}" onmouseover="this.src='./img/social-email-a.png'" onmouseout="this.src='./img/social-email.png'"/></a>
          </div>

          <div class="col-md-4 cservice">
            <h3><b>Customer Service</b></h3>
            <ul>
              <li><a href="http://www.tobysestatecoffee.co.id/">Shipping and Returns</a></li>
              <li><a href="http://www.tobysestatecoffee.co.id/">Privacy Policy</a></li>
              <li><a href="http://www.tobysestatecoffee.co.id/">Your Account</a></li>
              <li><a href="http://www.tobysestatecoffee.co.id/">Wholesale Enquiries</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-12 col-md-footer">
          <p>© 2016 Toby's Estate Indonesia</p>
          <p>all rights reserved</p>
        </div>

      </div>
    </div>

  </div>

  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('js/scrolling-nav.js') }}"></script>

</body>

</html>
