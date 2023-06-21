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
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="flex justify-between"> 
            <h4 class="card-title">Banner</h4>
            <a href="/vAddBanner" class="btn btn-primary py-2 px-4 mb-2">Add Banner</a>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th> Title </th>
                <th> Description </th>
                <th> Image Banner </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($banner as $b)
              <tr>
                <td style="width: 20%">{{$b->title}}</td>
                <td style="width: 50%">{{$b->description}}</td>
                <td>
                    <img src="banner/{{$b->image}}">
                </td>
                <td>                                    
                    <a href="{{url('deleteBanner', $b->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>                                     
                </td>
              </tr>
              @endforeach 
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection