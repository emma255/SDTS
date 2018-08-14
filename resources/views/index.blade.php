@extends('layout.layout') 
@section('contents-chart')
<div class="container-fluid">
  <div class="col-md-6" id="shopping"></div>
  <div class="col-md-6" id="routes"></div>
  <div class="row">
    {{--
  @include('charts') --}}
  </div>
</div>
@endsection
 
@section('contents')
<div class="container-fluid">
  <div class="col-md-5 col-md-offset-4">
    <h3 style="font-size: 200%">Welcome {{Auth::user()->name}}</h3>
    <div style="font-size: 150%">
      <p>SDMT System is used to keep the following records for the student in both levels of education:
        <ul type="none">
          <li><i class="fa fa-angle-right pull-left"></i>Shopping you made</li>
          <li><i class="fa fa-angle-right pull-left"></i>Routes or trips you made</li>
          <li><i class="fa fa-angle-right pull-left"></i>Payslips for payments you made</li>
        </ul>
        Also you can view both of these informations saved.
      </p>
    </div>
  </div>
</div>
@endsection