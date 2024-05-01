
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UY1 DATABOARD</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Vendor CSS Files -->
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="/vendors/owl-carousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="/vendors/owl-carousel/css/owl.theme.default.css">
<link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="/vendors/aos/css/aos.css">
<link rel="stylesheet" href="/css/style.min.css">
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
    <nav class="pl-3 navbar navbar-expand-lg pl-sm-0" id="navbar">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-100">
       <a href="/"><h1>UY1 DATABOARD</h1></a>
        <button class="ml-auto navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="ml-auto navbar-nav align-items-lg-center align-items-start">
          <li class="pl-4 d-flex align-items-center justify-content-between pl-lg-0">
            <div class="navbar-collapse-logo">
              <h3>UY1 DATABOARD</h3>
            </div>
            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="pl-5 mdi mdi-close navbar-toggler-icon"></span>
            </button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#popular-courses">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('info.index')}}">Announcements</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>

    @yield('content')

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

  <script src="/vendors/jquery/jquery.min.js"></script>
  <script src="/js/landingpage.js"></script>
</body>
</html>
