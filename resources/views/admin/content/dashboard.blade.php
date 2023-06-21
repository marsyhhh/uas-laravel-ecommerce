@extends('admin.app')
@section('content')
    <div class="row">
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">User</h3>
                </div>
              </div>
              <div class="col-3">
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">{{$user}}</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">Category</h3>
                </div>
              </div>
              <div class="col-3">
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">{{$category}}</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">Product</h3>
                </div>
              </div>
              <div class="col-3">
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">{{$product}}</h6>
          </div>
        </div>
      </div>
    </div>
@endsection