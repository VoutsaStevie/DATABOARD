
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>UY1 DATABOARD</title>
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
    </div>
    @yield('content')

    <script src="{{asset('vendor/global/global.min.js')}}"></script>
    <script src="{{asset('js/quixnav-init.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}"></script>
</body>

</html>
