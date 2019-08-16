@extends('layouts.master')

@section('content')



<html>
<form method="post" action="/student/store">
    {{ csrf_field() }}


    <div class="form-group">
        <label class="control-label col-sm-2" >Name</label>
        <div class="col-sm-10">
            <input type="text" name="name" id="name" class="form-control" >
        </div>
    </div>

        <div class="form-group">
            <label class="control-label col-sm-2" >Email</label>
            <div class="col-sm-10">
        <input type="text" name="email" class="form-control" id="email">
        </div>

    <div class="form-group">
        <label class="control-label col-sm-2" >Facebook</label>
        <div class="col-sm-10">
        <input type="text" name="fb" class="form-control" id="fb">
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" >Mobile</label>

        <div class="col-sm-10">
        <input type="text" name="mobile" class="form-control" id="mobile">
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</html>