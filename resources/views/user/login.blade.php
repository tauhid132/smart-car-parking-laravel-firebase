@extends('master')
@section('content')
<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-box-body">
  
       
       <div class="mb-3">
        <center><h1>ParkNow</h1></center>
      </div>
      @foreach ($errors->all() as $error)
      <div class="alert alert-danger" role="alert">
        {{ $error }}
      </div>
      @endforeach
      
      <form class="md-float-material form-material" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group has-feedback">
          <input type="text" class="form-control sty1" name="mobile" placeholder="Enter Mobile No">
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control sty1" name="password" placeholder="Enter Password">
        </div>
        <div>
          <div class="col-xs-8">
            <div class="col-xs-4 m-t-1">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
            </div>
          </div>
        </form>
  
        <div class="m-t-2"><center>Don't Have an Account <a href="{{ route('register') }}" class="text-center">Register Now</center></a></div>
      </div>
    </div>
@endsection