@extends('layouts.master')
@section('content')

    <h1>Students<a href="{{route('student.create')}}" class="btn btn-primary pull-right btn-sm">Add new Students</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>S.N.</th>
                <th>Name</th>
                <th>Email id</th>
                <th>Facebook</th>
                <th>Mobile number</th>
<th width="110px;">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $key=>$student)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td> {{$student->fb}}</td>
                    <td>{{$student->mobile}}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="{{ route('student.edit', $student->id) }}">Edit</a>
                        <a class="btn btn-success btn-sm" href="{{ route('student.delete', $student->id)}}" onclick="return confirm('Are you sure to delete?')">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>