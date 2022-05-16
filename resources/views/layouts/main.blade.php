<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" class="fav" href="img/favicon.png" type="image/png" />
  <title>SISI LIMITED LOGISTICS</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="vendors/linericon/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <link rel="stylesheet" href="vendors/animate-css/animate.css" />
  <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
</head>

<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="top_menu d-lg-block d-none">
      <div class="container">
        <div class="float-left">
          <ul class="left_side">
            <li>
              <a href="https://www.facebook.com/sisilimited/">
                <i class="fa fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="
              https://twitter.com/sisilimited">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/sisilimited/">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/sisi-limited-61805b232/">
                <i class="fa fa-linkedin"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="float-right">
          <ul class="right_side">
            <li>
              <a href="login.html">
                <i class="lnr lnr-phone-handset"></i>
                Tel/fax +255222129410
              </a>
            </li>
            <li>
              <a href="#">
                <i class="lnr lnr-envelope"></i>
                sales@sisilimited.co.tz
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg w-100">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html">
            <img src="img/logo.png" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <div class="row w-100">
              <div class="col-lg-12 pr-lg-0">
                <ul class="nav navbar-nav ml-auto justify-content-end">
                  <li class="nav-item ">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="{{ url('/services')}}">Services</a>
                  </li>
                    <ul class="dropdown-menu">  
                    </ul>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Blog</a>


                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog')}}">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="blogdetails">Blog Details</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact')}}">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->










  
<div class="container">

@yield('content')

</div>





  <div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href=""><h2 class="text-secondary mb-3"><span class="text-white">SISI LIMITED</h2></a>
            <p>We can arrange transportation for your goods, be it containerized Dangerous Goods, Loose Cargo, Fuel, Abnormal wide load, Car carrier, off road/heavy duty tracks, crane facilities and recovery facilities</p>
   
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white mb-4">Get In Touch</h4>
            <p>Posta, Samora Avenue,</p>
            <p><i class="fa fa-map-marker-alt mr-2"></i>NHC House 9th Floor, Office no 907. <br> P.O.Box 80151 <br> Dar es salaam, Tanzania</p>
            <p><i class="fa fa-phone-alt mr-2"></i>+255222129410</p>
            <p><i class="fa fa-envelope mr-2"></i>sales@sisilimited.co.tz</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white mb-4">Quick Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                {{-- <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pages</a> --}}
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>blog</a>
                <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a>
            </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
          <div class="text-white font-weight-medium">
           
            <p>Follow Us</p>
            <p>Let us be social</p>
            <div class="d-flex justify-content-start mt-4">
              <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
              <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
          </div>
          </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
    <p class="m-0 text-center text-white">
        &copy; <a class="text-white font-weight-medium" href="#">sisi limited</a>. All Rights Reserved. 2022
    </p>
</div>



  <!--================ End footer Area =================-->

  <!--================ Optional JavaScript =================-->
  <!--================ jQuery first, then Popper.js, then Bootstrap JS =================-->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('vendors/isotope/isotope-min.js') }}"></script>
  <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="{{ asset('js/mail-script.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>