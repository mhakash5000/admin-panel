@extends('backend.layouts.admin-master')
@section('content')

<!-- Content Wrapper. Contains page content start -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-light">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="text-dark" >Home</a></li>
              <li class="breadcrumb-item active text-dark">Password</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="card">
    <div class="head bg-muted">
        <div class="card-body ">
            <div class="row">
                <div class="col-md-12  d-flex justify-content-between align-items-center">
                    <h5 class="display-5">Change Password</h5>
                  <a href="{{route('users.all')}}" class="btn btn-warning text-dark"> <i class="fa fa-list"></i> User List</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
            <form action="{{route('update.password')}} " method="POST" >
                @csrf
                @if(Session::has('success'))
                <div class="btn btn-success">{{Session::get('success')}} </div>
                @endif
                @if(Session::has('error'))
                <div class="btn btn-danger">{{Session::get('error')}}</div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="form-group">
                    <label for="my-input">Current Password</label>
                    <input id="my-input" class="form-control" type="password" name="current_password" id="current_password" placeholder="Enter Your Current Password" required >
                <font style="color:red">{{($errors->has('password'))?($errors->first('password')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">New Password</label>
                    <input id="my-input" class="form-control" type="password" name="new_password" id="new_password" placeholder="Enter Your New Password" required>
                    <font style="color:red">{{($errors->has('password'))?($errors->first('password')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Conform-Password</label>
                    <input id="my-input" class="form-control" type="password" name="conform_password" id="conform_password" placeholder="Conform Your New Password" required >
                <font style="color:red">{{($errors->has('password'))?($errors->first('password')):''}} </font>
                </div>
                <div class="form-group">
                  <button type="submit" id="button" class="btn btn-success">Update</button>
                </div>

            </form>
        </div>
    </div>




</div>
{{-- card end --}}

  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection
