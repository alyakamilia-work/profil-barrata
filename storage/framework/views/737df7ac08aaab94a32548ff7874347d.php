<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $__env->yieldContent('title', 'Solusi Teknologi Inovatif'); ?> - PT Barrata Global Technology</title>
  <meta name="description" content="<?php echo $__env->yieldContent('description', 'PT Barrata Global Technology menyediakan layanan IT terintegrasi mulai dari pengembangan perangkat lunak hingga infrastruktur jaringan yang andal.'); ?>">
  <meta name="keywords" content="IT solutions, software development, IT consulting, network infrastructure, Barrata Global">

  <link href="<?php echo e(asset('assets/img/logo.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('assets/img/logo.png')); ?>" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <link href="<?php echo e(asset('assets/css/main.css')); ?>" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="<?php echo e(route('home')); ?>" class="logo d-flex align-items-center me-auto me-xl-0">
            <img src="<?php echo e(asset('assets/img/logo magang.png')); ?>" alt="PT Barrata Global Technology Logo">
          </a>

          <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li><a href="<?php echo e(route('about')); ?>">About</a></li>
                <li><a href="<?php echo e(route('services')); ?>">Services</a></li>
                <li><a href="<?php echo e(route('portfolio')); ?>">Dokumentasi</a></li> 
                <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">
    <?php echo $__env->yieldContent('content'); ?>
  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Alamat</h4>
            <p>Jl. Asia Afrika No. 123</p>
            <p>Bandung, Jawa Barat 40261</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Kontak</h4>
            <p>
              <strong>Phone:</strong> <span>+62 22 1234 5678</span><br>
              <strong>Email:</strong> <span>info@barrataglobal.tech</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Jam Operasional</h4>
            <p>
              <strong>Senin-Jumat:</strong> <span>08:00 - 17:00 WIB</span><br>
              <strong>Sabtu-Minggu</strong>: <span>Tutup</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Ikuti Kami</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">PT Barrata Global Technology</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>

  <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

</body>

</html><?php /**PATH E:\ProjectMagang\profil-barrata\resources\views/layouts/app.blade.php ENDPATH**/ ?>