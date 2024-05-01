@extends('layouts.studentDashboard')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to your student's <br> Dashboard</h1>
      <h2>Here you can have access to everything you need</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="order-1 col-lg-6 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="https://images.pexels.com/photos/4152003/pexels-photo-4152003.jpeg?auto=compress&cs=tinysrgb&w=600" class="img-fluid" alt="">
          </div>
          <div class="order-2 pt-4 col-lg-6 pt-lg-0 order-lg-1 content">
            <h3>Welcome to your student's DataBoard</h3>
            <p class="fst-italic">
              In this place are a number of information which are produced with the aim of helping you as a student, informationally speaking
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> View your timely students announcements.</li>
              <li><i class="bi bi-check-circle"></i> Consult your semestrial marks</li>
              <li><i class="bi bi-check-circle"></i> And get to know a number of further informations provided by the platform</li>
            </ul>
            <p>
              And just in case you need to, a link to various whatsapp groupes of the computer science department and a link to the official UY1 Website
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="{{route('welcome')}}">Welcome Page</a></h3>
            </div>
          </div>
          <div class="mt-4 col-lg-3 col-md-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="{{route('studentboard.create')}}">Student Marks-board</a></h3>
            </div>
          </div>
          <div class="mt-4 col-lg-3 col-md-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="{{route('events')}}">Events</a></h3>
            </div>
          </div>
          <div class="mt-4 col-lg-3 col-md-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a href="{{route('studentDashboard.announcements')}}">Announcements</a></h3>
            </div>
          </div>
          <div class="mt-4 col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="https://dev.to/wraith/my-8-tips-for-a-better-life-as-a-developer-1hfg">Life tricks</a></h3>
            </div>
          </div>
          <div class="mt-4 col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="">All Whatsapp Group Links</a></h3>
            </div>
          </div>
          <div class="mt-4 col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="{{route('studentDashboard.files')}}">Files</a></h3>
            </div>
          </div>
          <div class="mt-4 col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="https://uy1.uninet.cm/">UY1 Main site</a></h3>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- End Features Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>UY1</h3>
            <p>

              Yaounde, Ngoa Ekele<br>
              Cameroon <br><br>
              <strong>Phone:</strong> +237 222 22 13 20<br>
              <strong>Email:</strong> rectorat@univ-yaounde1.cm<br>
            </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4 d-md-flex">

      <div class="text-center me-md-auto text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>UY1</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
        </div>
      </div>
      <div class="pt-3 text-center social-links text-md-right pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short" style="color: white"></i></a>

  @endsection

</html>
