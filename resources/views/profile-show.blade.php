@extends('layout.layout') 
@section('contents')
<div class="row">
  <div class="col-md-5 col-md-offset-3">
    <!-- Card Regular -->
    <div class="card card-cascade">
      <div class="card-body card-body-cascade text-center">
        @foreach($details as $detail)

        <!-- Card image -->
        <div class="view view-cascade overlay">
          <img class="img img-circle" height="300" src="{{ asset('../storage/app/'.$image)}}" alt="{{Auth::user()->name}}">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!-- Card content -->

        <!-- Title -->
        <h4 class="card-title"><strong>{{Auth::user()->name}}</strong></h4>
        <!-- Subtitle -->
        
        <h6 class="font-weight-bold indigo-text py-2">{{$detail->profession}}</h6>

        <h6 class="font-weight-bold indigo-text py-2">{{$detail->currentEduLevel}} Student</h6>
        <h6 class="font-weight-bold indigo-text py-2">{{$detail->institution}}</h6>
        <!-- Text -->
        <p class="card-text">{{$detail->description}}</p>

        <!-- Facebook -->
        <a type="button" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"></i></a>
        <!-- Twitter -->
        <a type="button" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"></i></a>
        <!-- Google + -->
        <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fa fa-dribbble"></i></a>

        @endforeach
      </div>

    </div>
    <!-- Card Regular -->
  </div>
</div>
@endsection