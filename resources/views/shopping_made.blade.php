@extends('layout.layout') 
@section('contents')

<div class="box col-md-6 center-block">
    <div class="box-header text-center text-bold">Shoppings made</div>
    <div class="box-body">

        <table class="table table-striped table-responsive table-bordered table-condensed text-center">
            <tr>
                <th>Product name</th>
                <th>Quantity</th>
                <th>Date</th>
                <th>Total Cost</th>
            </tr>
            @foreach($shoppings as $shopping)
            <tr>
                <td>{{$shopping->product_name}}</td>
                <td>{{$shopping->quantity}}</td>
                <td>{{$shopping->date}}</td>
                <td>{{$shopping->price * $shopping->quantity}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection