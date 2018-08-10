@extends('layout.layout') 
@section('contents')
<div class="container-fluid">
  <div class="col-md-6" id="shopping"></div>
  <div class="col-md-6" id="routes"></div>
  <div class="row">
  @include('charts')
  </div>
</div>
@endsection