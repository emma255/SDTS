@extends('layout.layout') 
@section('contents')
<div class="row">

    <div class="col-md-3 col-md-offset-3">
        <h3 align="center">Update payslip</h3>
        <table class="table">
            <tr>
                <td>
                    <form class="form-group center-" method="POST" action="{{ route('Payslip.update',['id'=>$id])}}" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH"> @csrf
                        <input placeholder="Payment for" class="form-control" type="text" value="" name="purpose" id="purpose" required><br>
                        <input placeholder="Description" class="form-control" type="text" value="" name="description" id="description" required><br>
                        <label>Picture</label><input type='file' name="slip" id="slip" required><br>
                        <input type="submit" class="btn btn-default" value="save" name="savebtn" id="savebtn">
                    </form>
                </td>
            </tr>
        </table>
        {{--
    @include('layout.errors') --}}
    </div>
    <!--<div class="col-sm-4 text-justify">Right division</div>-->
</div>
@endsection