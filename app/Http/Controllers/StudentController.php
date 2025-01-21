<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        $students = Student::all();
        return view("students.index", compact("students"));
    }

    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'Image' => '',
            'Name' => 'required|string|max:255',
            'Email' => 'required|email',
            'Phone' => 'required|max:11',
            'Address' => 'required|max:255',
            'City' => 'required|string|max:100',
            'Class' => 'required|max:255',
            'Gender' => 'required|max:6',
            'Bio' => 'required|max:500',
            'create_at'=> now(),
            'updated_at'=>now(),

        ]);
        Student::create($request->all());
        return redirect()->route('student.index')->with('success', 'succes ');
    }

    public function edit( Student $student){
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student){
        $request->validate([
            'Image' => '',
            'Name' => 'required|string|max:255',
            'Email' => 'required|email',
            'Phone' => 'required|max:11',
            'Address' => 'required|max:255',
            'City' => 'required|string|max:100',
            'Class' => 'required|max:255',
            'Gender' => 'required|max:6',
            'Bio' => 'required|max:500',
            'create_at'=> now(),
            'updated_at'=>now(),
        ]);
        $student->update($request->all());
        return redirect()->route('student.index')->with('success','Hellow update success');
    }

  

    public function destroy(Student $student){
            $student->delete();
            return redirect()->route('student.index')->with('success','delete success full');
    }

}
