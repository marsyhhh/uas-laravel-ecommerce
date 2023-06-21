@extends('admin.app')
@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success justify-between flex">
            {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card text-center">
                <div class="card-body">
                  <h4 class="card-title">Category</h4>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Category</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $data)
                        <tr>
                          <td>{{$data->category_name}}</td>
                          <td>
                            <a href="{{url('deleteCategory', $data->id)}}" onclick="return confirm('Are you sure to delete?')">
                              <button type="submit" class="btn btn-danger">Delete</button>
                            </a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-6 grid-margin">
          <div class="card text-center">
            <div class="card-body">
            <h4 class="card-title">Add Category</h4>
              <form class="forms-sample" action="{{url('/addCategory')}}" method="POST">
                <div class="form-group row">
                  <div class="col-sm-9">
                    @csrf
                    <input type="text" class="form-control text-white" id="category" name="category" placeholder="Category">
                  </div>
                  <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary py-2 px-4">Add</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
@endsection