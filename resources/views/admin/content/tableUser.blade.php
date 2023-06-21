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
        <h4 class="card-title">Users</h4>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th> Username </th>
                <th> Email </th>
                <th> Password </th>
                <th> User Type </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody> 
              @foreach ($tableUser as $tableUser)
              <tr>
                <td>{{$tableUser->name}}</td>
                <td>{{$tableUser->email}}</td>
                <td>{{$tableUser->password}}</td>
                @if ($tableUser->usertype=='1')
                    <td>Admin</td>
                @else
                    <td>User</td>
                @endif
                @if ($tableUser->usertype=='1')
                    <td>-</td>
                @else
                <td>
                  <a href="{{url('deleteUser', $tableUser->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</a>
                </td>
                @endif
                
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection