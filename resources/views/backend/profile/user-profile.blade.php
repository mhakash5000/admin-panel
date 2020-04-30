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
                    <h5 class="display-5">User Profile</h5>
                  <a href="{{route('users.create')}}" class="btn btn-warning text-dark"><i class="fa fa-plus-circle"></i>Create User</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-5 offset-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                  src="{{asset('storage/app/public/images/'.Auth::user()->image)}}">
                    {{-- src="@if(isset($imageName->image)){{asset('/').'/'.$imageName->image}}@else{{asset('/')}}/upload/no_image.png @endif " style="width:100px;height:100px"   id="image" alt="User profile picture"> --}}
                    {{-- src="{{asset('/storage/app/images/'.Auth::user()->image)}} " style="width:100px;height:100px"   id="image" alt="User profile picture"> --}}
                    {{-- src="{{(!empty($user->image))?url('public/upload/user_images/'.$user->image)
                    :url('public/upload/no_image.png')}}" alt="User profile picture"> --}}




              </div>

              <h3 class="profile-username text-center">{{$user->role}}</h3>


            <table class="table">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{{$user->name}} </td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{$user->phone}} </td>
                    </tr>
                    <tr>
                        <td>E-Mail</td>
                        <td>{{$user->email}} </td>
                    </tr>

                </tbody>
            </table>

              <a href="{{route('profile.edit')}} " type="submit" class="btn btn-primary btn-block"><b>Edit Profile</b></a>

            </div>
          </div>
        </div>
      </div>

</div>
{{-- card end --}}
  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection
