<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>www.MBSonline.id | IT Solution Provider</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../user/assets/img/Logo MBS Corp.png" rel="icon">
  <link href="../../user/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="../../https://kit.fontawesome.com/045781860b.js" crossorigin="anonymous"></script>

  <!-- Google Fonts -->
  <link href="../../https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../user/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../user/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../user/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../user/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../user/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../user/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../user/assets/css/style.css" rel="stylesheet">
  <link href="../../user/assets/css/produk.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Reveal
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">sales@mbsonline.id</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>(022) 6375 6596</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="whatsapp://send?text=Halo mbsonline.id, saya tertarik dengan produk/services : ...&phone=+6281211884575" target="_blank" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
        <a href="https://m.facebook.com/story.php?story_fbid=195653426348560&substory_index=1957565857919269&id=100077117100545&mibextid=Nif5oz" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/mitrasopyan?igshid=MmU2YjMzNjRlOQ==" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://tiktok.com/@mitrasopyan" target="_blank" class="linkedin"><i class="bi bi-tiktok"></i></i></a>
        <a href="https://www.youtube.com/@mitrasopyan" target="_blank" class="linkedin"><i class="bi bi-youtube"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="{{ route('user/home') }}">MBS<span>CORP</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="user/assets/img/logo.png" alt=""></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="{{ route('user/home') }}">Beranda</a></li>
          <li><a class="nav-link" href="#">Tentang Kami</a></li>
          <li><a class="nav-link" href="#">Visi & Misi</a></li>
          <li><a class="nav-link" href="#">Layanan</a></li>
          <li><a class="nav-link" href="#">Project Reference</a></li>
          <li><a class="nav-link" href="#">Contact</a></li>
          <li><a class="nav-link" href="https://drive.google.com/file/d/1Aey03XTZW2LWmitWmkAf0voGrBwdmTkM/view" target="_blank">Compro</a></li>
          <li class="dropdown"><a href="{{ route('user/barang') }}"><span>Produk</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('user/cctv_user') }}">CCTV</a></li> 
              <li><a href="{{ route('user/laptop_user') }}">Laptop</a></li> 
              <li><a href="{{ route('user/network_user') }}">Networking</a></li>
              <li><a href="{{ route('user/pc_user') }}">PC</a></li>
              <li><a href="{{ route('user/printer_user') }}">Printer</a></li>
              <li><a href="{{ route('user/security_system_user') }}">Security System</a></li>
              <li><a href="{{ route('user/server_user') }}">Server</a></li>
              <li><a href="{{ route('user/services_user') }}">Services</a></li>
              <li><a href="{{ route('user/software_user') }}">Software</a></li>
              <li><a href="{{ route('user/isp_user') }}">ISP</a></li>
              <li><a href="{{ route('user/disk_user') }}">Storage</a></li>
              <li><a href="{{ route('user/san_switch_user') }}">San Switch</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Detail Produk</h2>
        <ol>
          <li><a href="{{ route('user/home') }}">Beranda</a></li>
          <li><a href="{{ route('user/barang') }}">Produk</a></li>
          <li>Detal Produk</li>
        </ol>
      </div>

    </div>
  </section>
  @yield('content')

  <footer id="footer">
    <div class="container">
      <div class="copyright">
        Since 2017 - <strong>www.mbsonline.id</strong>
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
      -->
        <strong>IT Solution Provider</strong>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../user/assets/vendor/aos/aos.js"></script>
  <script src="../../user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../user/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../user/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../user/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../user/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../user/assets/js/main.js"></script>

</body>

</html>