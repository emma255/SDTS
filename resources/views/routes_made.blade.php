@extends('layout.layout') 
@section('contents')


<div class="box col-md-4 center-block">
    <div class="text-bold text-center">Routes made</div>
    <div class="box-body">
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