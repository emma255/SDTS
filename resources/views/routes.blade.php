@extends('layout.layout')  

@section('contents')
<div class="row">
   
    <div class="col-md-4 col-md-offset-3">
        <h3 align="center">Add the routes made</h3>
        <table class="table">
            <tr>
                <td>
                    <form class="form-group" method="post" action="route">
                        {{csrf_field()}}
                        <input placeholder="From" class="form-control" type="text" value="" name="t_from" id="t_from" required><br>
                        <input placeholder="To" class="form-control" type="text" value="" name="t_to" id="t_to" required><br>
                        <input placeholder="Cost in Tanzania Shillings" class="form-control" type="number" value="" name="cost" id="cost" required min="0"><br>
                        <input placeholder="date" class="form-control" type="date" value="" name="date" id="date" required><br>
                        <input type="submit" class="btn btn-default col-md-offset-10" value="save" name="savebtn" id="savebtn">
                    </form>
                </td> 
            </tr>
        </table>
    </div>
  </div>

@endsection 