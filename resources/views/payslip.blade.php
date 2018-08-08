@extends('layout.layout')  

@section('contents')
<div class="row">
   
    <div class="col-md-3 col-md-offset-3">
        <h3 align="center">Pay slip</h3>
        <table class="table">
            <tr>
                <td>
                    <form class="form-group center-" method="post" action="savePayslip" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input placeholder="Payment for" class="form-control" type="text" value="" name="purpose" id="purpose" required><br>
                        <input placeholder="Description" class="form-control" type="text" value="" name="description" id="description" required><br>
                        <label>Picture</label><input type='file' name="picture" id="picture" required><br>
                        <input type="submit" class="btn btn-default" value="save" name="savebtn" id="savebtn">
                    </form>
                </td> 
            </tr>
        </table>
           {{-- @include('layout.errors') --}}
    </div>
        <!--<div class="col-sm-4 text-justify">Right division</div>-->
  </div>
@endsection 