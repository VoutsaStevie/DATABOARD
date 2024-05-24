<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs
	================================================== -->
  <meta charset="utf-8">
  <title>DATABOARD</title>

  <!-- Mobile Specific Metas
	================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="MVS">
  <meta name="generator" content="Themefisher Educenter HTML Template v1.0">
  <!-- theme meta -->
  <meta name="theme-name" content="educenter" />

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{asset('plugins/themify-icons/themify-icons.css')}}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
  <!-- aos -->
  <link rel="stylesheet" href="{{asset('plugins/aos/aos.css')}}">
  <!-- venobox popup -->
  <link rel="stylesheet" href="{{asset('plugins/venobox/venobox.css')}}">

  <!-- Main Stylesheet -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
  <style>

@media (min-width: 855px) {
    .container, .container-sm {
        max-width: 1000px;
    }
}

element.style {
    margin-top: 0px;
}
@media (max-width: 991px) {
    .navigation {
        background: #1a1a37;
    }
}
.bg-white {
    background-color: #1a1a37 !important;
}
.header{
    background-color: #1a1a37
}
  </style>
</head>

<body>
  <!-- preloader start 576 540-->
  <div class="preloader">
    <img src="{{asset('images/preloader.gif')}}" alt="preloader">
  </div>
  <!-- preloader end -->

<!-- header -->
<header class="fixed-top header">
    <!-- top header -->

    <!-- navbar -->
    <div class="navigation w-100">
      <div class="container custom-nav-container">
        <nav class="p-0 navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"></a>
          <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navigation">
            <ul class="ml-auto text-center navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#acceuil">HOME</a>
              </li>
              <li class="nav-item @@about">
                <a class="nav-link" href="#about">ABOUT</a>
              </li>
              <li class="nav-item @@courses">
                <a class="nav-link" href="#courses">COURSES</a>
              </li>
              <li class="nav-item @@courses">
                  <a class="nav-link" href="/signin">BULLETIN-BOARD</a>
              </li>
              <li class="nav-item @@events">
                <a class="nav-link" href="#events">EVENTS</a>
              </li>
              <li class="nav-item @@contact">
                <a class="nav-link" href="#contact">CONTACT</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
<!-- /header -->
<!-- hero slider -->
<section class="bg-cover hero-section overlay" data-background="images/banner/banner-1.jpg">
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row" id="acceuil">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Easy document access is our mission</h1>
            <p class="mb-4 text-muted" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">Get in touch with relevant files concerning the computer Science departement of the University of Yaoundé I.
                Essentially on our Courses, Teachers,Informations and events.
            </p>
            <a href="/signin" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Get Started</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Quick document access is our mission</h1>
            <p class="mb-4 text-muted" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Get in touch with relevant files concerning the computer Science departement of the University of Yaoundé I.
                Essentially on our Courses, Teachers,Informations and events.
            </p>
            <a href="/signin" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Get Started</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Proper document access is our mission</h1>
            <p class="mb-4 text-muted" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">Get in touch with relevant files concerning the computer Science departement of the University of Yaoundé I.
                Essentially on our Courses, Teachers,Informations and events.
            </p>
            <a href="/signin" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /hero slider -->

<!-- banner-feature -->
<section class="bg-gray overflow-md-hidden">
  <div class="p-0 container-fluid">
    <div class="row no-gutters">
      <div class="col-xl-4 col-lg-5 align-self-end">
        <img class="img-fluid w-100" src="images/banner/banner-feature.jpg" alt="banner-feature">
      </div>
      <div class="col-xl-8 col-lg-7">
        <div class="row feature-blocks bg-gray justify-content-between">
          <div class="mb-4 text-center col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 text-sm-left">
            <i class="mb-4 ti-book mb-xl-4 mb-lg-3 feature-icon"></i>
            <h3 class="mb-4 mb-xl-4 mb-lg-3"> Information dissemination</h3>
            <p>Facilitates the efficient distribution of information across various channels.
                Users can easily view announcements and updates</p>
          </div>
          <div class="mb-4 text-center col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 text-sm-left">
            <i class="mb-4 ti-blackboard mb-xl-4 mb-lg-3 feature-icon"></i>
            <h3 class="mb-4 mb-xl-4 mb-lg-3">Display Capacity</h3>
            <p>Display capacity refers to the ability of the electronic data board to present information effectively and attractively
              </p>
          </div>
          <div class="mb-4 text-center col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 text-sm-left">
            <i class="mb-4 ti-agenda mb-xl-4 mb-lg-3 feature-icon"></i>
            <h3 class="mb-4 mb-xl-4 mb-lg-3">Remote Accessibility</h3>
            <p>Remote accessibility enables users to access the electronic data board from any location with an internet connection
              </p>
          </div>
          <div class="mb-4 text-center col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 text-sm-left">
            <i class="mb-4 ti-write mb-xl-4 mb-lg-3 feature-icon"></i>
            <h3 class="mb-4 mb-xl-4 mb-lg-3">Role and permission management</h3>
            <p>Allows administrators to define different user roles and assign specific permissions to each role.
                Users have access only to the data relevant to their roles</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /banner-feature -->

<!-- about us -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="order-2 col-md-6 order-md-1" id="about">
        <h2 class="section-title">About DataBoard</h2>
        <p>Databoard, the electronic board application, serves as a platform for disseminating information about the Department of Computer Science at the University of Yaoundé I. This innovative tool offers remote access to information, eliminating the limitations of physical bulletin boards. With Databoard, users can effortlessly access and interact with information from any location.</p>
        <p>Additionally, Databoard ensures seamless display functionality and incorporates various features essential for an electronic board.</p>
        <a href="https://www.overleaf.com/read/vsqdymgntgjc#5c9202" class="btn btn-outline-primary">Learn more</a>
      </div>
      <div class="order-1 mb-4 col-md-6 order-md-2 mb-md-0">
        <img class="img-fluid w-100" src="images/about/about-us.jpg" alt="about image">
      </div>
    </div>
  </div>
</section>
<!-- /about us -->

<!-- courses -->
<section class="section-sm" id="courses">
  <div class="container">
    <div class="row">
      <div class="col-12" >
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 mr-3 text-nowrap">Our Courses</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="courses.html" class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block">see all</a>
          </div>
        </div>
      </div>
    </div>
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->
  <div class="mb-5 col-lg-4 col-sm-6">
    <div class="p-0 card border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-1.jpg" alt="course thumb">
      <div class="card-body">
        <a href="course-single.html">
          <h4 class="card-title">Information System</h4>
        </a>
        <p class="mb-4 card-text">With robust information systems in place, businesses harness the power of data to streamline operations, and gain valuable insights into their processes. </p>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="mb-5 col-lg-4 col-sm-6">
    <div class="p-0 card border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-2.jpg" alt="course thumb">
      <div class="card-body">
        <a href="course-single.html">
          <h4 class="card-title">Data Communication</h4>
        </a>
        <p class="mb-4 card-text"> Data communication deals with the transmission of vital information across networks or facilitating seamless collaboration between users.</p>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="mb-5 col-lg-4 col-sm-6">
    <div class="p-0 card border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-3.jpg" alt="course thumb">
      <div class="card-body">
        <a href="course-single.html">
          <h4 class="card-title">C Programming</h4>
        </a>
        <p class="mb-4 card-text">C empowers developers to craft efficient and reliable software solutions across a wide range of domains, driving innovation in software.  </p>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="mb-5 col-lg-4 col-sm-6">
    <div class="p-0 card border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-1.jpg" alt="course thumb">
      <div class="card-body">
        <a href="course-single.html">
          <h4 class="card-title">Information System</h4>
        </a>
        <p class="mb-4 card-text">With robust information systems in place, businesses harness the power of data to streamline operations, and gain valuable insights into their processes. </p>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="mb-5 col-lg-4 col-sm-6">
    <div class="p-0 card border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-2.jpg" alt="course thumb">
      <div class="card-body">
        <a href="course-single.html">
          <h4 class="card-title">Data Communication</h4>
        </a>
        <p class="mb-4 card-text"> Data communication deals with the transmission of vital information across networks or facilitating seamless collaboration between users.</p>
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="mb-5 col-lg-4 col-sm-6">
    <div class="p-0 card border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/courses/course-3.jpg" alt="course thumb">
      <div class="card-body">
        <a href="course-single.html">
          <h4 class="card-title">C Programming</h4>
        </a>
        <p class="mb-4 card-text">C empowers developers to craft efficient and reliable software solutions across a wide range of domains, driving innovation in software.  </p>
      </div>
    </div>
  </div>
    <!-- /course list -->
    <!-- mobile see all button -->
    <div class="row">
      <div class="text-center col-12">
        <a href="courses.html" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /courses -->

<!-- success story -->
<section class="bg-cover section" data-background="images/backgrounds/success-story.jpg">
  <div class="container">
    <div class="row" id="presentation">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
        <a class="play-btn venobox" href="" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="p-5 bg-white">
          <h2 class="section-title">Presentation of the departement</h2>
          <p>Welcome to the Department of Computer Science and Information and Communication Technologies (ICT) at the University of Yaoundé 1, where innovation meets excellence.</p>
          <p>With its structured programs and diverse offerings, our department is dedicated to nurturing the next generation of tech leaders and fostering cutting-edge research in the fields of computer science and ICT.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->

<!-- events -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12" id="events">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 mr-3 text-nowrap">Upcoming Events</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="events.html" class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block">see all</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
  <!-- event -->
  <div class="mb-5 col-lg-4 col-sm-6 mb-lg-0">
    <div class="border-0 card rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="images/events/event-1.jpg" alt="event thumb">
        <div class="card-date"><span>05</span><br>May</div>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="mr-2 ti-location-pin text-primary"></i>University of Yaoundé I</p>
        <a href=""><h4 class="card-title">Hackathon activities launched by ICT level 3 students.</h4></a>
      </div>
    </div>
  </div>
  <!-- event -->
  <div class="mb-5 col-lg-4 col-sm-6 mb-lg-0">
    <div class="border-0 card rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="images/events/event-1.jpg" alt="event thumb">
        <div class="card-date"><span>04</span><br>May</div>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="mr-2 ti-location-pin text-primary"></i>University of Yaoundé I</p>
        <a href=""><h4 class="card-title">Hackathon activities launched by ICT level 3 students.</h4></a>
      </div>
    </div>
  </div>
  <!-- event -->
  <div class="mb-5 col-lg-4 col-sm-6 mb-lg-0">
    <div class="border-0 card rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="images/events/event-1.jpg" alt="event thumb">
        <div class="card-date"><span>04</span><br>May</div>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="mr-2 ti-location-pin text-primary"></i>University of Yaoundé I</p>
        <a href=""><h4 class="card-title">Hackathon activities launched by ICT level 3 students.</h4></a>
      </div>
    </div>
  </div>
</div>
    <!-- mobile see all button -->
    <div class="row">
      <div class="text-center col-12">
        <a href="course.html" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">see all</a>
      </div>
    </div>
  </div>
</section>
<!-- /events -->

<!-- teachers -->
<section class="section">
  <div class="container">
    <div class="row justify-content-center" id="teacher">
      <div class="col-12">
        <h2 class="section-title">Our Teachers</h2>
      </div>
      <!-- teacher -->
      <div class="mb-5 col-lg-4 col-sm-6 mb-lg-0">
        <div class="border-0 card rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('images/teachers/unknown.jpg')}}" alt="teacher">
          <div class="card-body">
            <a href="">
              <h4 class="card-title">Dr KOUOKAM</h4>
            </a>
            <p>Teacher</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div class="mb-5 col-lg-4 col-sm-6 mb-lg-0">
        <div class="border-0 card rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('images/teachers/unknown.jpg')}}" alt="teacher">
          <div class="card-body">
            <a href="">
              <h4 class="card-title">Dr MESSI</h4>
            </a>
            <p>Teacher</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div class="mb-5 col-lg-4 col-sm-6 mb-lg-0">
        <div class="border-0 card rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{asset('images/teachers/unknown.jpg')}}" alt="teacher">
          <div class="card-body">
            <a href="">
              <h4 class="card-title">John Doe</h4>
            </a>
            <p>Teacher</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /teachers -->

<!-- footer -->
<footer>
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="mb-5 col-lg-4 col-sm-8 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="acceuil"><img class="mb-4 img-fluid" src="images/LogoFooter.png" alt="logo"></a>
          <ul class="list-unstyled">
            <li class="mb-2">Mélen, Yaoundé, CMR</li>
            <li class="mb-2">+237 656 551 166</li>
            <li class="mb-2">+237 683 338 001</li>
          </ul>
        </div>
        <!-- company -->
        <div class="mb-5 col-lg-2 col-md-3 col-sm-4 col-6 mb-md-0">
          <h4 class="mb-5 text-white"></h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#about">About Us</a></li>
            <li class="mb-3"><a class="text-color" href="#teacher">Our Teacher</a></li>
            <li class="mb-3"><a class="text-color" href="#contact">Contact</a></li>
          </ul>
        </div>
        <!-- links -->
        <div class="mb-5 col-lg-2 col-md-3 col-sm-4 col-6 mb-md-0">
          <h4 class="mb-5 text-white"></h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#courses">Courses</a></li>
            <li class="mb-3"><a class="text-color" href="#events">Events</a></li>
            <li class="mb-3"><a class="text-color" href="https://uy1.uninet.cm/">UY1</a></li>
          </ul>
        </div>

        <div class="mb-5 col-lg-2 col-md-3 col-sm-4 col-6 mb-md-0">
          <h4 class="mb-5 text-white"></h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="">WordPress</a></li>
            <li class="mb-3"><a class="text-color" href="">LearnPress</a></li>
            <li class="mb-3"><a class="text-color" href="#presentation">Presentation</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="" style="color: #182b45">
    <div class="container">
      <div class="row">
        <div class="text-center col-sm-7 text-sm-left">
          <p class="mb-0">Copyright &copy;
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>
             <a href="https://uy1.uninet.cm/" style="color:rgb(233, 155, 11)">Université de Yaoundé I</a>
          </p>
        </div>
        <div class="text-center col-sm-5 text-sm-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="p-2 d-inline-block" href="https://www.fb.com/l/6lp1kJRRR"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="p-2 d-inline-block" href="https://twitter.com/MacheVoutsa/status/1563250535779614727"><i class="ti-twitter-alt text-primary"></i></a></li>
            <li class="list-inline-item"><a class="p-2 d-inline-block" href="https://github.com/VoutsaStevie/DATABOARD"><i class="ti-github text-primary"></i></a></li>
            <li class="list-inline-item"><a class="p-2 d-inline-block" href="https://instagram.com/itz_s.t.e.v.i.e/"><i class="ti-instagram text-primary"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{asset('plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{asset('plugins/slick/slick.min.js')}}"></script>
<!-- aos -->
<script src="{{asset('plugins/aos/aos.js')}}"></script>
<!-- venobox popup -->
<script src="{{asset('plugins/venobox/venobox.min.js')}}"></script>
<!-- filter -->
<script src="{{asset('plugins/filterizr/jquery.filterizr.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="{{asset('plugins/google-map/gmap.js')}}"></script>

<!-- Main Script -->
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>
