@extends('layout.layout') 
@section('contents')


<div class="box col-md-4 center-block">
    <div class="text-bold text-center">Payments made</div>
    <div class="box-body"> <a href="{{ asset('payslip')}}"> <button class="btn btn-success">Add payment</button> </a>
        <table class="table table-striped table-responsive table-bordered table-condensed">
            <tr>
                <th>Purpose</th>
                <th>Description</th>
                <th>Payslip</th>
                <th>Edit</th>
            </tr>
            @foreach($details as $detail)
            <tr>
                <td>{{$detail->purpose}}</td>
                <td>{{$detail->description}}</td>
                <td><img src="{{ asset('../storage/app/'.$detail->picture)}}" height="80" alt="{{$detail->purpose}} payslip"></td>

                <form class="row" method="POST" action="{{ route('Payslip.destroy', ['id' => $detail->id]) }}" onsubmit="return confirm('Are you sure you want to delete?')">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}"> @if ($detail->purpose != null)
                  <td class="col-md-1">
                    <a href="{{ route('Payslip.edit', ['id' => $detail->id]) }}" class="btn btn-warning col-sm-12 col-xs-5 btn-margin" onclick="return confirm('Are you sure you want to edit?')">
                      <i class="fa fa-pencil"></i> </a>
                  </td>
                  <td>
                    <input type="submit" value="Delete" class="btn btn-danger col-sm-offset-2">

                  </td>
                  @endif
                </form>
            </tr>
            @endforeach
        </table>
    </div>

</div>
@endsection