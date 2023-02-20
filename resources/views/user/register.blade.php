@extends('master')
@section('content')
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-box-body">
      
      @foreach ($errors->all() as $error)
      <div class="alert alert-danger" role="alert">
        {{ $error }}
      </div>
      @endforeach
      <div class="mb-3">
        <center><h1>ParkNow</h1></center>
      </div>
      
      <form class="md-float-material form-material" action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group has-feedback">
          <input type="text" class="form-control sty1" name="full_name" placeholder="Enter Full Name">
        </div>
        <div class="form-group has-feedback">
          <input type="text" class="form-control sty1" name="mobile" placeholder="Enter Mobile No">
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control sty1" name="password" placeholder="Enter Password">
        </div>
        <div>
          <div class="col-xs-8">
            <div class="col-xs-4 m-t-1">
              <button type="submit" class="btn btn-primary btn-block btn-flat"> Register </button>
            </div>
          </div>
        </form>
        
        <div class="m-t-2"><center>Already Have an account? <a href="{{ route('login') }}" class="text-center">Login Now</center></a></div>
      </div>
    </div>
    @endsection