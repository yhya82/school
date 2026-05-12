<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use App\Models\Classes;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        $classes = Classes::all();
        return view('student.create',compact('classes','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
        $request->validate([
            
            'class_id' => 'required',
            
            'last_name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required'
        ]);

        Student::create([
            'user_id'=> $user->id,
            'class_id' => $request->class_id,
            
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
        ]);

        return redirect()->route('students.index')->with('Success', 'with student created successfuly');

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $student->load('marks.subject');
        $total = $student->marks->sum('score');
        $average = $student->marks->avg('score');
        return view('student.show',compact('student','total','average'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
             
            'last_name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required'
        ]);
        $student->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
        ]);

        return redirect()->route('students.index')->with('Success', 'Student updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

          return redirect()->route('students.index')->with('Success', 'Student deleted Successfully');
    }
}
