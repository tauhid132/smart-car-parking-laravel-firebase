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
                  <div class="card">
                   
                    <div class="card-body">
                     <center>
                      <img height="200px" width="200px" src="{{ asset('success.png') }}">
                      <h3 class="mt-2">Your Order Has been Completed</h3>
                      <h5 class="mt-2">Your Entry PassCode is</h5>
                      <h3 class="mt-2">{{ $parking->entry_code }}</h3>
                      <h3 class="mt-2">Parking Slot: {{ $parking->slot_no }}</h3>
                      <p><a href="{{ route('entry') }}">Enter Gate Passcode</a></p>
                     </center>
                    </div>
                  </div>
                </div>
             
              </div>
            </div>
          
        </div>
      </div>
        </div>
    </div>
</body>

@endsection