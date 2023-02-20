@extends('master')
@section('content')
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">
        @include('admin.includes.topbar')
        <aside class="main-sidebar"> 
            @include('admin.includes.sidebar')
        </aside>
        <div class="content-wrapper"> 
            <div class="content-header sty-one">
                <h1 class="text-blue"><i class="fa fa-dashboard"></i> My Dashboard</h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><i class="fa fa-angle-right"></i> My Dashboard</li>
                </ol>
            </div>
            
            <div class="content">
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <div class="info-box"> <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
                            <div class="info-box-content"> <span class="info-box-number">3</span> <span class="info-box-text">Total Parking Slots</span> </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="info-box"> <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
                            <div class="info-box-content"> <span class="info-box-number">{{ $available_slots }}</span> <span class="info-box-text">Booked Slots</span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="info-box"> <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>
                            <div class="info-box-content"> <span class="info-box-number">{{ 3-$available_slots }}</span> <span class="info-box-text">Free Slots</span></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="info-box"> <span class="info-box-icon bg-red"><i class="fa fa-money"></i></span>
                            <div class="info-box-content"> <span class="info-box-number">{{ $total_earnings }}</span> <span class="info-box-text">Total Earnings</span></div>
                        </div>
                    </div>
                

                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="{{ route('enable-car-wash') }}"><button class="btn btn-success">Enable Car Wash</button></a>
                            <a href="{{ route('disable-car-wash') }}"><button class="btn btn-danger">Disable Car Wash</button></a>
                            <a href="{{ route('open-gate') }}"><button class="btn btn-primary">Open Gate</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 m-b-3">
                    <div class="box box-info">
                      <div class="box-header with-border p-t-1">
                        <h3 class="box-title text-black">Parking Bookings</h3>
                       
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <div class="table-responsive">
                          <table class="table no-margin">
                            <thead>
                              <tr>
                                <th>Park. ID</th>
                                <th>Status</th>
                                <th>Entry Code</th>
                                <th>Slot</th>
                                <th>Total Charge</th>
                                <th>Car Wash</th>
                                <th>Entry Time</th>
                                <th>Exit Time</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                             @foreach ($parkings as $parking )
                             <tr>
                              <td><a href="#">{{ $parking->id }}</a></td>
                              @php
                                  $now = \Carbon\Carbon::now();
                                  $expired = \Carbon\Carbon::parse($parking->exit_time);
                                  $status = $now->gt($expired);
                              @endphp

                              <td>
                                  @if($status)
                                      <span class="label label-warning">Expired</span>
                                  @else
                                      <span class="label label-success">Active</span>
                                  @endif
                              </td>
                              <td>{{ $parking->entry_code }}</td>
                              <td>{{ $parking->slot_no }}</td>
                              <td>{{ $parking->grand_total }}</td>
                              @if($parking->extra_service == 1)
                                  <td><a href="{{ route('client-enable-car-wash', $parking->id) }}"><button class="btn btn-success btn-sm">Yes! Wash Now</button></a></td>
                              @elseif ($parking->extra_service == 2)
                                  <td><button class="btn btn-secondary btn-sm">Already Washed</button></td>
                              @elseif($parking->extra_service == null)
                                  <td><button class="btn btn-danger btn-sm">Not Available</button></td>
                              @endif
                              <td> {{ \Carbon\Carbon::parse($parking->entry_time)->format('l, j F, Y h:i A') }} </td>
                              <td> {{ \Carbon\Carbon::parse($parking->exit_time)->format('l, j F, Y h:i A') }} </td>
                            </tr>
                             @endforeach
                            </tbody>
                          </table>
                        </div>
                        <!-- /.table-responsive --> 
                      </div>
                    </div>
                    </div>
                  </div>
            </div>
        </div>
        
    </div>
    
    
</body>

@endsection