<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $students=Student::all();
        Log::debug("students retrived",['size'=> count($students)]);
        Log::info("successfully retrieved students");
        return view('student.index',compact('students'));
    }
    public function show($id){
        return view('student/index',['student'=>Student::findorFail($id)]);
    }
    public function create(){
        return view('student.create');
    }
    public function store(Request $request){

        $this->validate($request, [
            'name'=>'required',
            'fb'=>'required|unique:students',
            'email' => 'required|email|unique:students',
            'mobile' => 'required|max:10|unique:students'
        ]);

        $student=Student::create($request->all());
        return redirect('student/index'
        );
    }

    public function edit($id){
        return view('student.edit',['student'=>Student::findorFail($id)]);
    }

    public function update($id, Request $request){

        $this->validate($request, [
            'name'=>'required',
            'fb'=>'required',
            'email' => 'required|email',
            'mobile' => 'required|max:10'
        ]);



        $student = $request->all();

        Student::find($id)->update($student);

        return redirect()->route('student.index');
    }

    public function delete($id){

        Student::find($id)->delete();
        return redirect()->route('student.index');
    }

}