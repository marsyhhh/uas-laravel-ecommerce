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
          <h4 class="card-title">Product</h4>
          <a href="/vAddProduct" class="btn btn-primary py-2 px-4 mb-2">Add Product</a>
      </div>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th> Title </th>
                <th> Description </th>
                <th> Quantity </th>
                <th> Category </th>
                <th> Price </th>
                <th> Image </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($product as $product)
              <tr>
                <td style="width: 15%">{{$product->title}}</td>
                <td style="width: 40%">{{$product->description}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->category_name}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <img class="img-lg" src="product/{{$product->image}}">
                </td>
                <td>
                  <ul>
                    <li>
                      <a href="{{url('editProduct', $product->id)}}" class="btn btn-primary mb-1">Edit</a>
                    </li>
                    <li>
                      <a href="{{url('deleteProduct', $product->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                    </li>
                  </ul>
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