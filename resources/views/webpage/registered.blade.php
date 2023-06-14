<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rekrutmen - Universitas Andalas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
    <link rel="icon" href="{{ URL::asset('img/unand.ico') }}" type="image/x-icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('') }}landing-web/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('') }}landing-web/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{ asset('') }}landing-web/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('') }}landing-web/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('') }}landing-web/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{ asset('') }}landing-web/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="{{ asset('') }}landing-web/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('') }}landing-web/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v2.2.1
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <nav class="nav-menu d-none d-lg-block">
         <li class="get-started">
          <img src="{{ asset('') }}assets/dist/img/logo-unand.png" width="150">
             </li>
        </nav>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="{{('/')}}">Home</a></li>
          <li class="active"><a href="{{ route('register') }}">Buat Akun</a></li>
          <li><a href="#">Info Lowongan</a></li>
          <li><a href="{{('/')}}#contact">Kontak</a></li>

          <li class="get-started"><a href="{{ route('login-form') }}">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

 

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Terima Kasih Sudah Mendaftar</h2>
          <ol>
            <li><a href="{{('/')}}">Home</a></li>
            <li>Register</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <div class="social-links">
                <p>Silahkan cek email yang anda daftarkan untuk validasi data anda.
              </div>
            </div>
          </div>

        
          

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-12 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Direktorat Teknologi Informasi - Universitas Andalas</strong>. All Rights Reserved
          </div>
        
        </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('') }}landing-web/assets/vendor/jquery/jquery.min.js"></scrip>
  <script src="{{ asset('') }}landing-web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('') }}landing-web/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{ asset('') }}landing-web/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('') }}landing-web/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{ asset('') }}landing-web/assets/vendor/counterup/counterup.min.js"></script>
  <script src="{{ asset('') }}landing-web/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{ asset('') }}landing-web/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('') }}landing-web/assets/vendor/venobox/venobox.min.js"></script>
  <script src="{{ asset('') }}landing-web/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('') }}landing-web/assets/js/main.js"></script>

</body>

</html>