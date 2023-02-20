@extends('master')
@section('content')
<style>
  
  .bkash_image {
      display: flex;
      justify-content: center;
      height: 100px;
      background-color: #fff;
      width: 100%;
      padding: 0;
  }
  hr.itemDivider {
      border: 3px solid #e44b6f;
      margin-top: 1px;
      margin-bottom: 1px;
  }
  
  #trxInfo {
      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
      padding-top: 17px;
      padding-left: 5px;
      padding-right: 5px;
      padding-bottom: 17px;
  }
  #merchantLogo {
      width: 32px;
      height: 32px;
      background-size: cover;
      border-radius: 100px;
      margin-top: 2px;
      margin-right: 2px;
      box-shadow: 0px 0px 1px 1px rgba(191, 181, 181, 1);
  }
  div.infoNameInvoice {
      display: flex;
      flex-direction: column;
      padding-left: 1px;
  }
  #merchantName {
      color: #464646;
      font-size: 12px;
      flex-wrap: wrap;
      font-family: 'Roboto', sans-serif;
      text-align: left;
  }
  div.infoInvoice {
      display: flex;
      flex-direction: row;
  }
  span.invoiceText {
      font-size: 13px;
      color: #9a9a9a;
      font-family: 'Roboto', sans-serif;
  }
  #merchantInvoice1 {
      color: #9a9a9a;
      font-size: 13px;
      margin-left: 3px;
      width: 50px;
      font-family: 'Roboto', sans-serif;
      white-space: nowrap;
      text-align: start;
  }
  #merchantInvoice2 {
      color: #9a9a9a;
      font-size: 13px;
      overflow: hidden;
      width: 185px;
      margin-left: 45px;
      text-overflow: ellipsis;
      font-family: 'Roboto', sans-serif;
      white-space: nowrap;
      text-align: start;
  }
  div.trxMerchantAmount {
      display: flex;
      flex-direction: row;
      margin-left: 1px;
  }
  span.merchantAmount {
      color: #464646;
      font-family: 'Roboto', sans-serif;
  }
  .containerb {
    position: relative;
    width: 100%;
    max-width: 960px;
    margin: 0 auto;
    padding: 0 20px;
    box-sizing: border-box; }
  
    .formBody {
      margin-bottom: 0px;
  }
  #inputHolder {
      display: flex;
      flex-direction: column;
      background-image: url('./../img/input_bg.png');
      width: 100%;
      height: 170px;
      align-items: center;
      justify-content: center;
      background-color: #c94161;
  }
  b.infoText {
      color: #FFFFFF;
      font-size: 11px;
      font-family: 'Roboto', sans-serif;
      margin-left: 30px;
  }
  
  span.infoText {
      color: #FFFFFF;
      font-size: 11.5px;
      font-family: 'Roboto', sans-serif;
  }
  div.buttonAction {
      display: flex;
      flex-direction: row;
  }
  #resend_otp, #close_button, #yes_button {
      outline: none;
      width: 50%;
      color: #FFFFFF;
      background-color: #d1d3d4;
      border-right: 1px solid #BCBCBC;
      border-left: 0px solid #000000;
      border-top: 0px solid #000000;
      border-bottom: 0px solid #000000;
      cursor: pointer;
      font-family: 'Roboto', sans-serif;
      font-size: 12px;
      border-radius: 0px;
  }
  
  #submit_button > img, #resend_otp > img, #close_button > img {
      vertical-align: middle;
  }
  #submit_button, #no_button {
      outline: none;
      width: 50%;
      color: #414042;
      border-right: 1px solid #BCBCBC;
      border-left: 0px solid #000000;
      border-top: 0px solid #000000;
      border-bottom: 0px solid #000000;
      background-color: #d1d3d4;
      cursor: pointer;
      font-family: 'Roboto', sans-serif;
      font-size: 12px;
      border-radius: 0px;
  }
  #footerItem {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding-bottom: 5px;
  }
  #credit {
      display: flex;
      flex-direction: row;
      margin-left: 10px;
      margin-right: 10px;
      align-items: center;
  }
  div.dialerItem {
      display: flex;
      width: 23px;
      height: 23px;
      align-items: center;
      justify-content: center;
      background-color: #e2136e;
      border-radius: 50px;
  
  
  }
  #dialText {
      color: #c94161;
      margin-left: 10px;
  }
  .form-signin .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      margin-top: 15px;
  }
  
  .form-signin .form-control:focus {
      z-index: 50;
  }
  /*.form-signin input[type="email"], input[type="number"], input[type="search"], input[type="text"], input[type="tel"], input[type="url"], input[type="password"] {
      text-align: center;
      border-radius: 0px;
      width: 100%;
  }*/
  
  .form-signin input[type="tel"], input[type="number"] {
      color: #3c3c3c;
  }
  
  .bkash_btn {
      display: inline-block;
    height: 38px;
    padding: 0 30px;
    color: #555;
    text-align: center;
    font-size: 11px;
    font-weight: 600;
    line-height: 38px;
    letter-spacing: .1rem;
    text-transform: uppercase;
    text-decoration: none;
    white-space: nowrap;
    background-color: transparent;
    border-radius: 4px;
    border: 1px solid #bbb;
    cursor: pointer;
    box-sizing: border-box;
  }
    </style>
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
                    <div class="card-header">
                      <h3>Estimated Fare</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered">
                        <tr>
                          <td>Vehicle Type:</td>
                          <td>
                            <p>{{ $parking->vehicle_type }}</p>
                          </td>
                        </tr>
                        <tr>
                          <td>Parking Time</td>
                          <td>
                            <p>{{ $min/60 }} Hrs.</p>
                          </td>
                        </tr>
                        <tr>
                          <td>Per Hour Fare</td>
                          <td>
                            <p>30 Tk</p>
                          </td>
                        </tr>
                        <tr>
                          <td>Parking Rent</td>
                          <td>
                            <p>{{ $min/60*30 }} Tk</p>
                          </td>
                        </tr>
                        <tr>
                          <td>Extra Service (Car Wash)</td>
                          <td>
                            @if ($parking->extra_service == 1)
                            <p>100.00 Tk</p>
                            @else
                            <p>0.00 Tk</p>
                            @endif
                            
                          </td>
                        </tr>
                        @php
                          if($parking->extra_service == 1){
                            $charge = 100;
                          }else{
                            $charge = 0;
                          }
                        @endphp
                        <tr>
                          <td>Grand Total</td>
                          <td>
                            <p>{{ $min/60*30+$charge }} Tk</p>
                          </td>
                        </tr>
                      </table>
                      <div><button class="btn btn-success" data-toggle="modal" data-target="#add_data_Modal">Pay & Checkout</button></div>
                    </div>
                  </div>
                </div>
          
        </div>
      </div>
        </div>
    </div>
</body>
<div id="add_data_Modal" class="modal">
  <div class="modal-dialog " style="width:380px;">
    <div class="modal-content">

      <div class="form-signin">
        <span id="header">
          <div>
            <div>
              <div class="bkash_image">
                <img src="{{ asset('bkash.gif') }}">
              </div>

              <hr id="itemDiv" class="itemDivider">

              <div id="trxInfo">
                <div id="merchantLogo" style="background-image: url(&quot;https://s3-ap-southeast-1.amazonaws.com/merchantlogo.pay.bka.sh/merchant-default-logo.png&quot;);"></div>
                <div class="infoNameInvoice">
                  <span id="merchantName">Smart Parking</span>
                  <div class="infoInvoice">
                    <span class="invoiceText">Invoice:</span>
                    <span id="merchantInvoice1">INV1651934076378</span>
                  </div>
                  <span id="merchantInvoice2"></span>

                </div>
                <div class="trxMerchantAmount">
                  <span class="merchantAmount">৳ </span><span id="merchantAmountVal">{{ $min/60*30 }}</span>
                </div>
              </div>
            </div>
        </span>
        <span id="containerb">
          <form class="formBody" action="{{ route('confirmation',$parking->id) }}" id="pay_form" method="post">
            @csrf
            <input type="hidden" value="{{ $min/60*30+$charge }}" name="grand_total">
            <input type="hidden" value="100" name="pay_amount">
            <div id="inputHolder">
              <span for="wallet" class="infoText">Your bKash Account number</span>
              <input type="text" id="wallet" name="mobile" style=" text-align: center;
        border-radius: 0px;
        width: 80%;" class="form-control" font-size="18px" ;="" placeholder="e.g 01XXXXXXXXX" maxlength="11" autocomplete="off" required="">

              <span class="infoText">By clicking on <b> Confirm,</b> you are agreeing to the <b><a href="https://www.bkash.com/terms-of-use-checkout" target="_blank">terms &amp; conditions</a></b> </span>

              <div id="error"></div>
            </div>

            <div id="loader_div" style="display: none;">
              <div id="loader_image"></div>
            </div>

            <div id="button_div" class="buttonAction">
              <button type="button" class="bkash_btn" id="close_button">Close</button>
              <button type="submit" name="submit"  class="bkash_btn" id="submit_button">Confirm</button>

            </div>
          </form>
        </span>
        <span id="footer">
          <div id="footerItem" style="padding:10px">
            <div id="credit">


              <b id="dialText">*This is a dummy Payment. For Project Only.</b>
            </div>
          </div>
      </div>
    </div>
  </div>
  </span>
</div>
@endsection