<!DOCTYPE html>
<html lang="en">
  <head>
    @vite('resources/css/app.css')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mars Register</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
              <div class="card col-lg-4 mx-auto">
                <div class="card-body px-5 py-5">
                  <h3 class="card-title text-left mb-3">Register</h3>
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                      <label>Username</label>
                      <input id="name" class="form-control p_input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input id="email" class="form-control p_input" type="email" name="email" :value="old('email')" required autocomplete="username">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input id="password" class="form-control p_input" type="password" name="password" required autocomplete="new-password">
                    </div>
                    <div class="form-group">
                      <label>Confirm Password</label>
                      <input id="password_confirmation" class="form-control p_input" type="password" name="password_confirmation" required autocomplete="password_confirmation">
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary btn-block enter-btn">{{ __('Register') }}</button>
                    </div>
                    <p class="sign-up text-center">Already have an Account?<a href="{{ route('login') }}"> Log In</a></p>
                  </form>
                </div>
              </div>
            </div>
            <!-- content-wrapper ends -->
          </div>
          <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/js/off-canvas.js"></script>
    <script src="admin/js/hoverable-collapse.js"></script>
    <script src="admin/js/misc.js"></script>
    <script src="admin/js/settings.js"></script>
    <script src="admin/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" ></script>
  </body>
</html>