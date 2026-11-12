<?php helper('meta'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 
  <?php display_meta($meta ?? []); ?>
  <meta name="author" content="Faith Infosoft">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <meta name="MobileOptimized" content="width">
  <meta name="robots" content="index, follow">

 
  <link href="<?= base_url('assets/img/logo.png') ?>" rel="icon"type="image/jpeg">

  
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <div id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+91 94951 12288, +91 94951 14488</span></i>
        <i class="bi bi-telephone d-flex align-items-center ms-4"><span>0481 2411122</span></i>
        <i class="bi bi-envelope d-flex align-items-center ms-4"><span>info@faithinfosoft.com</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span>Working time : 9:00 am - 7:30 pm</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://www.facebook.com/faithinfosys/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.linkedin.com/company/faith-infosys/" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="https://www.instagram.com/faithinfosys/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.youtube.com/@FaithInfosys" class="youtube"><i class="bi bi-youtube"></i></a>
      </div>
    </div>
  </div>

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="<?= base_url() ?>" class="logo d-flex align-items-center me-auto">
       
         <img src="<?php echo base_url('assets/img/faith_infosoft_logo.jpeg') ?>" class="img-fluid" alt="Faith Infosys Logo" title="Faith Infosys Logo">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?= base_url() ?>" class="active">Home</a></li>
          <li><a href="<?= base_url('best-software-development-company-in-kottayam') ?>">About</a></li>
          <li class="dropdown"><a href="<?= base_url('custom-software-web-iOS-app-development-company-in-kottayam') ?>"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="<?= base_url('service/best-web-development-company-in-kottayam-kerala') ?>">Web Development</a></li>
              <li><a href="<?= base_url('service/best-mobile-app-ios-app-development-Kottayam') ?>">Mobile App Development</a></li>
              <li><a href="<?= base_url('service/best-software-development-company-in-kottayam-kerala') ?>">Software Development</a></li>
              <li><a href="<?= base_url('service/digital-marketing') ?>">Digital Marketing</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('portfolio') ?>">Portfolio</a></li>
          <li><a href="<?= base_url('careers') ?>">Careers</a></li>
          <li><a href="<?= base_url('blog') ?>">Blog</a></li>
          <li><a href="<?= base_url('contact') ?>">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="<?= base_url('contact') ?>">Get Free Consultation</a>

    </div>
  </header>
  

 <?= $this->renderSection('content') ?>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
            <span class="sitename">Faith Infosoft</span>
          </a>
          <div class="footer-contact pt-3">
            <p>3rd Floor Marette Tower</p>

<p>Near No.1 Private Bus Stand</p>

<p>Palace Road, Changanacherry</p>

</p>
            <p>Kottayam, Kerala 686001</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+91 9495112288</span></p>
            <p><strong>Email:</strong> <span>info@faithinfosoft.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li><a href="<?= base_url('best-software-development-company-in-kottayam') ?>">About us</a></li>
            <li><a href="<?= base_url('custom-software-web-iOS-app-development-company-in-kottayam') ?>">Services</a></li>
            <li><a href="<?= base_url('careers') ?>">Careers</a></li>
            <li><a href="<?= base_url('contact') ?>">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="<?= base_url('service/best-web-development-company-in-kottayam-kerala') ?>">Web Development</a></li>
            <li><a href="<?= base_url('service/best-mobile-app-ios-app-development-Kottayam') ?>">App Development</a></li>
            <li><a href="<?= base_url('service/best-software-development-company-in-kottayam-kerala') ?>">Software Development</a></li>
            <li><a href="<?= base_url('service/digital-marketing') ?>">Digital Marketing</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Faith Infosoft</strong> <?= date('Y') ?> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
      </div>
    </div>

  </footer>

  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/919495112288" class="whatsapp-float d-flex align-items-center justify-content-center" target="_blank">
    <i class="bi bi-whatsapp"></i>
  </a>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>

  <!-- Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>