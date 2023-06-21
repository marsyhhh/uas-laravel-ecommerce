<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
        <div class="main-panel">
          <div class="content-wrapper">
            @if (session()->has('message'))
                <div class="alert alert-success justify-between flex">
                    {{ session()->get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                  <div class="flex justify-between">
                      <h4 class="card-title">Edit Product</h4>
                      <a href="/showProduct" class="btn btn-primary py-2 px-4 mb-2">Back</a>
                  </div>
                    <form class="forms-sample" action="{{url('/editProductConfirm', $product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control text-white" name="title" id="title" placeholder="Title" required value="{{$product->title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Description</label>
                        <input type="text" class="form-control text-white" name="description" id="description" placeholder="Description" required value="{{$product->description}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Price</label>
                        <input type="number" class="form-control text-white" name="price" id="price" placeholder="Price" required value="{{$product->price}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Quantity</label>
                        <input type="number" min="0" class="form-control text-white" name="quantity" id="quantity" placeholder="Quantity" required value="{{$product->quantity}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select class="form-control text-white" name="category" id="category" required>
                        @foreach ($category as $category)    
                        <option value="{{$category->category_name}}" selected="Select Category">{{$category->category_name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Current Image</label>
                        <div class="input-group col-xs-12">
                            <img class="img-lg" src="product/{{$product->image}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Upload Image</label>
                        <div class="input-group col-xs-12">
                        <input type="file" name="image" class="form-control text-white">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
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