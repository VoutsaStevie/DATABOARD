
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Register</title>
  </head>
  <body>



  <div class="content" style="margin-top: 200px">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('images/signup2.png')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Register</h3>
            </div>

            <form method="POST" action="/signin">
                @csrf

              <div class="form-group first">
                <label for="username">Username</label>
                <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">

              </div>

              <div class="form-group first">
                <label for="email">Email</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username">

              </div>

              <div class="mb-4 form-group last">
                <label for="password">Password</label>
                <input id="password" class="form-control"
                type="password"
                name="password"
                required autocomplete="new-password">

              </div>

              <div class="mb-4 form-group last">
                <label for="password_confirmation">confirm Password</label>
                <input id="password_confirmation" class="form-control"
                type="password"
                name="password_confirmation" required autocomplete="new-password">

              </div>

              <div class="mb-5 d-flex align-items-center">
                <label class="mb-0 control control--checkbox"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
              </div>


              <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="btn-primary">
                    {{ __('Register') }}
                </x-primary-button>
            </div>

            </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
