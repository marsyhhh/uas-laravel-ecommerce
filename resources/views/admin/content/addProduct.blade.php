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
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="flex justify-between">
            <h4 class="card-title">Add Product</h4>
            <a href="/showProduct" class="btn btn-primary py-2 px-4 mb-2">Back</a>
        </div>
        <form class="forms-sample" action="{{url('/addProduct')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="exampleInputName1">Title</label>
            <input type="text" class="form-control text-white" name="title" id="title" placeholder="Title" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Description</label>
            <input type="text" class="form-control text-white" name="description" id="description" placeholder="Description" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Price</label>
            <input type="number" class="form-control text-white" name="price" id="price" placeholder="Price" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Quantity</label>
            <input type="number" min="0" class="form-control text-white" name="quantity" id="quantity" placeholder="Quantity" required>
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Category</label>
            <select class="form-control text-white" name="category" id="category" required>
              @foreach ($category as $category)    
              <option value="{{$category->category_name}}">{{$category->category_name}}</option>
              @endforeach
            </select>
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
@endsection