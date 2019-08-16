@extends('layouts.master')

@section('content')


                <div class="panel-body">
                    <form action="{{ route('student.update', $student->id) }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2" >Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="title" class="form-control" value="{{ $student->name }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" >Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" id="title" class="form-control" value="{{ $student->email }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" >Facebook</label>
                            <div class="col-sm-10">
                                <input type="text" name="fb" id="title" class="form-control" value="{{ $student->fb }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" >Mobile Number</label>
                            <div class="col-sm-10">
                                <input type="text" name="mobile" id="title" class="form-control" value="{{ $student->mobile }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="btn btn-default" value="Update Post" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection