<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>DATABOARD</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <style>

        .card-intro-title{
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            color: #323281;
        }
    </style>
</head>

<body>
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="" src="./images/logoFooter.png" alt="" height="50px"  >
            </a>
            <div class="nav-control" >
              <div class="hamburger">
                  <span  class="line" style="background-color: #FFBC3B;"></span><span class="line" style="background-color: #FFBC3B;"></span><span  class="line" style="background-color: #FFBC3B;"></span>
              </div>
          </div>
        </div>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">

                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="quixnav">
          <div class="quixnav-scroll">
              <ul class="metismenu" id="menu">
                  <li class="nav-label first" style="color: #FFBC3B">Main Menu</li>
                  <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon icon-single-04"></i>
                            <span  class="nav-text">Dashboard</span>
                        </a>
                      <ul aria-expanded="false">
                          <li><a href="/students">Manage Students</a></li>
                          <li><a href="/marks">Manage Marks</a></li>
                          <li><a href="/course">Manage Courses</a></li>
                          <li><a href="{{route('allInfos')}}">Manage Publication</a></li>
                          <li><a href="/specialities">Manage Specialities</a></li>
                          <li><a href="{{route('files.create')}}">Upload File</a></li>
                          <li><a href="/dashboard" style="color: #FFBC3B;">Logout</a></li>

                      </ul>
                  </li>
              </ul>
          </div>
      </div>
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4 style="color: #FFBC3B; font-family:Verdana, Geneva, Tahoma, sans-serif;">Hi, welcome back!</h4>
                            <p class="mb-0">Here's Your Admin Dashboard</p>
                        </div>
                    </div>
                </div>
                <!-- row 1-->
                <div class="row">
                    <a href="/students">
                        <div class="col-xl-4">
                            <div class="my-4">
                                <h4 class="card-intro-title">Manage Students</h4>
                            </div>
                            <div class="card">
                                <div class="card-body p-4">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                            </li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="./images/4.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./images/5.png" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./images/6.jpg" alt="Third slide">
                                            </div>
                                        </div><a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span
                                                class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next"><span
                                                class="carousel-control-next-icon"></span>
                                            <span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/marks">
                        <div class="col-xl-4">
                            <div class="my-4">
                                <h4 class="card-intro-title">Manage Marks</h4>
                            </div>
                            <div class="card">
                                <div class="card-body p-4">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                            </li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="./images/7.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./images/8.jpg" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./images/9.jpg" alt="Third slide">
                                            </div>
                                        </div><a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span
                                                class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next"><span
                                                class="carousel-control-next-icon"></span>
                                            <span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/course">
                        <div class="col-xl-4">
                            <div class="my-4">
                                <h4 class="card-intro-title">Manage Courses</h4>
                            </div>
                            <div class="card">
                                <div class="card-body p-4">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                            </li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="./images/1.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./images/2.jpg" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./images/3.jpg" alt="Third slide">
                                            </div>
                                        </div><a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span
                                                class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next"><span
                                                class="carousel-control-next-icon"></span>
                                            <span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- row 2-->

                <div class="row">
                  <a href="/specialities">
                    <div class="col-xl-4">
                      <div class="my-4">
                          <h4 class="card-intro-title">Manage Specialities</h4>
                      </div>
                      <div class="card">
                          <div class="card-body p-4">
                              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                      </li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                  </ol>
                                  <div class="carousel-inner">
                                      <div class="carousel-item active">
                                          <img class="d-block w-100" src="./images/10.jpg" alt="First slide">
                                      </div>
                                  </div>
                                  <a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span
                                          class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next"><span
                                          class="carousel-control-next-icon"></span>
                                      <span class="sr-only">Next</span>
                                  </a>
                              </div>
                          </div>
                      </div>
                    </div>
                  </a>
                  <a href="{{route('allInfos')}}">
                    <div class="col-xl-4">
                        <div class="my-4">
                            <h4 class="card-intro-title">Manage Announcements</h4>
                        </div>
                        <div class="card">
                            <div class="card-body p-4">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                        </li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="./images/11.png" alt="First slide">
                                        </div>

                                    </div><a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span
                                            class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next"><span
                                            class="carousel-control-next-icon"></span>
                                        <span class="sr-only">Next</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </a>
                  <a href="{{route('files.create')}}">
                    <div class="col-xl-4">
                        <div class="my-4">
                            <h4 class="card-intro-title">Upload File</h4>
                        </div>
                        <div class="card">
                            <div class="card-body p-4">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                        </li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="./images/12.jpg" alt="First slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span
                                            class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next"><span
                                            class="carousel-control-next-icon"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                  </div>
                  </a>
              </div>
            </div>
        </div>
        <div class="footer">
            <div class="copyright">
                <p>Copyright ©<a href="https://uy1.uninet.cm/" target="_blank">Univerisity of Yaoundé</a> 2024</p>
            </div>
        </div>
    </div>
    <script src="{{asset('vendor/global/global.min.js')}}"></script>
    <script src="{{asset('js/quixnav-init.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}"></script>
</body>

</html>
