@extends('layout.layout')

@section('contents')
<div class="row">
   
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
        <h3 class="text-center">Shoppings</h3>
        <table class="table table-striped table-responsive table-bordered table-condensed">
            <tr>
                <th>Product name</th>
                <th>Quantity</th>
                <th>Date</th>
                <th>Cost</th>
            </tr>
        @foreach($shoppings as $shopping)
        <tr>
        <td>{{$shopping->product_name}}</td>
        <td>{{$shopping->quantity}}</td>
        <td>{{$shopping->date}}</td>
        <td>{{$shopping->price}}*{{$shopping->quantity}}</td>
        </tr>
        @endforeach
        </table>

    </div>
    
    <div class="col-sm-4">
        <h3 class="text-center">Routes</h3>
                <table class="table table-striped table-responsive table-bordered table-condensed">
            <tr>
                <th>From</th>
                <th>To</th>
                <th>Date</th>
                <th>Fare</th>
            </tr>
        @foreach($routes as $route)
        <tr>
        <td>{{$route->t_from}}</td>
        <td>{{$route->t_to}}</td>
        <td>{{$route->date}}</td>
        <td>{{$route->cost}}</td>
        </tr>
        @endforeach
        </table>
    </div>
    
</div>
@endsection