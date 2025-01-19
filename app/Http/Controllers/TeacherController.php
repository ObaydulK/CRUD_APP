<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function index()
    {
        $teachers = Teacher::all();
        return view("teachers.index", compact("teachers"));
    }
    public function create()
    {
        return view("teachers.create");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:teachers",
            "phone" => "required",

            "bio" => "nullable|string",
        ]);
        Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'bio' => $request->bio,
        ]);
        return redirect()->route('teacher.index')->with("success", "Teacher add successful");
    }

    public function edit(Teacher $teacher)
    {
        return view("teachers.edit", compact("teacher"));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $validated = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:teachers",
            "phone" => "required",

            "bio" => "nullable|string",
        ]);
        Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'bio' => $request->bio,
        ]);
        return redirect()->route('teacher.index')->with('success','update success');
    }


    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teacher.index')->with('success', 'teacher deleted successfully!');
    }



}
