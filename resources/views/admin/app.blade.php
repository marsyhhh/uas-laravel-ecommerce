<!DOCTYPE html>
<html lang="en">
  <head>
    @vite('resources/css/app.css')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Mars fashion</title>
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
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <!-- content-wrapper -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
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