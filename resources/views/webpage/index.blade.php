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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
                    <li class="active"><a href="{{ '/' }}">Home</a></li>
                    <li><a href="{{ route('register') }}">Buat Akun</a></li>
                    <li><a href="{{ '/info-lowongan' }}">Info Lowongan</a></li>
                    <li><a href="#contact">Kontak</a></li>

                    <li class="get-started"><a href="{{ route('login-form') }}">Login</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Bergabunglah bersama kami untuk Kedjajaan Bangsa</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Universitas Andalas</h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="#about" class="btn-get-started scrollto">Panduan</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('') }}landing-web/assets/img/hero-img.png" class="img-fluid animated"
                        alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <div class="section-title aos-init aos-animate" data-aos="fade-up">
            <h2>Informasi</h2>
        </div>
        <section id="more-services" class="more-services">
            <div class="container">

                <div class="row">
                    @foreach ($articles as $article)
                   

                        <div class="col-md-6 d-flex align-items-stretch">
                           
                                <div class="card-body">
                                    <h5 class="card-title"><a href="{{ route('webpage-article-detail', $article->name) }}">{{ $article->judul }}</a>
                                    </h5>
                                    <small class="card-text">Published at : {{ $article->created_at }}</small>
                                    <p class="card-text">{!! substr($article->isi, 0, 100) !!}</p>
                                    <div class="read-more"><a href="{{ route('webpage-article-detail', $article->name) }}">
                                            <i class="bi bi-arrow-right"></i> Read More</a></div>
                                </div>
                          
                        </div>
                    @endforeach

                </div>
            </div>
        </section>


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Kontak</h2>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-about">
                            <h3>Universitas Andalas</h3>
                           
                            <div class="social-links">
                                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="info">
                            <div>
                                <i class="ri-map-pin-line"></i>
                                <p>Limau Manis, Kec. Pauh, <br>Kota Padang, Sumatera Barat 25175</p>
                            </div>

                            <div>
                                <i class="ri-mail-send-line"></i>
                                <p>rekrutmen@unand.ac.id</p>
                            </div>

                            <div>
                                <i class="ri-phone-line"></i>
                                <p>(0751) 71181</p>
                            </div>

                        </div>
                    </div>

                    

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12 text-lg-left text-center">
                    <div class="copyright">
                        &copy; Copyright <strong>Direktorat Teknologi Informasi - Universitas Andalas</strong>. All
                        Rights Reserved
                    </div>

                </div>
            </div>
        </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('') }}landing-web/assets/vendor/jquery/jquery.min.js"></script>
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
