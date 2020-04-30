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
                    <h5 class="display-5">Change User Profile</h5>
                    <a href="{{route('profile.user')}}" class="btn btn-warning text-dark">Your Profile</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
            <form action="{{route('profile.update')}} " method="POST" enctype="multipart/form-data" >
                @csrf
                @if(Session::has('success'))
                <div class="btn btn-success">{{Session::get('success')}} </div>
                @endif

                <div class="form-group">
                    <label for="my-input">Role</label>
                    <input id="my-input" class="form-control" type="text" name="role"value='{{$editData->role}} '>
                    <font style="color:red">{{($errors->has('role'))?($errors->first('role')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Name</label>
                    <input id="my-input" class="form-control" type="text" name="name"value='{{$editData->name}} '>
                    <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Phone</label>
                    <input id="my-input" class="form-control" type="tel" name="phone" value='{{$editData->phone}} '>

                </div>
                <div class="form-group">
                    <label for="my-input">Email</label>
                    <input id="my-input" class="form-control" type="email" name="email" value='{{$editData->email}} '>
                </div>
                <div class="form-group">
                    <label for="my-input">Image</label>
                    <img src="{{asset('storage/app/public/images/'.Auth::user()->image)}}" id="image" alt="" style="width:464px;height:300px">
                    <input id="my-input" class="form-control" type="file" name="image" id="file" onchange="showImage(this,'image')" value=''>
                </div>
                {{-- <div class="form-group" >
                  <img src="src="{{(!empty($editData->image))?url('public/upload/user_images/'.$editData->image):url('public/upload/no_image.png')}}"
                   alt="" style="width:408px;height:200px; border:1px solid #000;">
                   <img src="{{asset('/')}}/upload/no_image.png" id="showImage" style="width:408px;height:200px; border:1px solid #000;"  alt="">

                </div> --}}

                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Updated</button>
                </div>

                {{-- {{asset('/')}}/upload/no_image.png --}}

            </form>
        </div>
    </div>




</div>
{{-- card end --}}

  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection
