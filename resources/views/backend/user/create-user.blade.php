@extends('backend.layouts.admin-master')
@section('content')

<!-- Content Wrapper. Contains page content start -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-muted">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="text-dark" >Home</a></li>
              <li class="breadcrumb-item active text-dark">User</li>
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
                    <h5 class="display-5">Create User</h5>
                  <a href="{{route('users.all')}}" class="btn btn-warning text-dark"> <i class="fa fa-list"></i> User List</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
            <form action="{{route('users.store')}} " method="POST" enctype="multipart/form-data">
                @csrf
                @if(Session::has('success'))
                <div class="btn btn-success">{{Session::get('success')}} </div>
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
                    <label for="my-input">Role</label>
                    <input id="my-input" class="form-control" type="text" name="role" placeholder="Enter Your Role" required>
                    <font style="color:red">{{($errors->has('role'))?($errors->first('role')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Name</label>
                    <input id="my-input" class="form-control" type="text" name="name" placeholder="Enter Your Name" required>
                    <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Phone</label>
                    <input id="my-input" class="form-control" type="tel" name="phone" placeholder="Enter Your Phone" required>
                       <font style="color:red">{{($errors->has('phone'))?($errors->first('phone')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Email</label>
                    <input id="my-input" class="form-control" type="email" name="email" placeholder="Enter Your Email" required>
                       <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Password</label>
                    <input id="my-input" class="form-control" type="password" name="password" placeholder="Enter Your Password" required>
                       <font style="color:red">{{($errors->has('password'))?($errors->first('password')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Conform-Password</label>
                    <input id="my-input" class="form-control" type="password" name="conform-password" placeholder="Conform Your Password" required>
                       <font style="color:red">{{($errors->has('password'))?($errors->first('password')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Image</label>
                    <input id="my-input" class="form-control" type="file" name="image" required>
                       {{-- <font style="color:red">{{($errors->has('password'))?($errors->first('password')):''}} </font> --}}
                </div>
                <div class="form-group">
                  <button type="submit" id="button" class="btn btn-success">Submit</button>
                </div>

            </form>
        </div>
    </div>




</div>
{{-- card end --}}

  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection
