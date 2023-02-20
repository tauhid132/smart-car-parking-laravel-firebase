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
      @if(Session::has('success'))
      <div class="alert alert-success" role="alert">
       {{ session('success')}}
      </div>
@endif
     
      
      <form class="md-float-material form-material" action="{{ route('entry') }}" method="POST">
        @csrf
        <div class="form-group has-feedback">
          <input type="text" class="form-control sty1" name="entry_code" placeholder="Enter Your Entry Code">
        </div>

        <div>
          <div class="col-xs-8">

            <!-- /.col -->
            <div class="col-xs-4 m-t-1">
              <button type="submit" class="btn btn-primary btn-block btn-flat"> Verify</button>
            </div>
            <!-- /.col -->
          </div>
      </form>
  
        {{-- <div class="m-t-2"><center>Don't Have an Account <a href="{{ route('register') }}" class="text-center">Register Now</center></a></div> --}}
      </div>
    </div>
@endsection