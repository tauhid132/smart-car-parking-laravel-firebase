@extends('master')
@section('content')
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">
        @include('user.includes.topbar')
        <aside class="main-sidebar"> 
            @include('user.includes.sidebar')
        </aside>
        <div class="content-wrapper"> 
            <div class="content-header sty-one">
                <h1 class="text-blue"><i class="fa fa-dashboard"></i> New Reserve</h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><i class="fa fa-angle-right"></i> New Reserve</li>
                </ol>
            </div>

           
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
              {{ $error }}
            </div>
            @endforeach
          <div class="card ">
            <div class="card-body">
              <form method="post" action="{{ route('reserve') }}">
                @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="firstName1">Choose Vehicle Type</label>
                    <select class="custom-select form-control" data-placeholder="Type to search cities" name="vehicle_type">
                      <option>Select One</option>
                      <option value="Car">Car</option>
                      <option value="Bike">Bike</option>
                      <option value="Truck">Truck</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lastName1">Vehicle Number</label>
                    <input class="form-control" type="text" name="vehicle_number" placeholder="Enter Your Vehicle Number">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="firstName1">Entry Time </label>
                    <input class="form-control" type="datetime-local" name="entry_time">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="firstName1">Exit Time </label>
                    <input class="form-control" type="datetime-local" name="exit_time">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="firstName1">Extra Service</label>
                    <select class="custom-select form-control" data-placeholder="Type to search cities" name="extra_service">
                      <option value="{{ null }}">Select if Needed</option>
                      <option value="1">Car Wash</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
          </div>
          </div>
          
        </div>
      </div>
        </div>
    </div>
</body>
    
@endsection