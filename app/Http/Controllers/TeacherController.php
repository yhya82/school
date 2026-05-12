<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::with('user')->get();

        return view('teacher.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    //pass a single user instead of all the users 
    public function create(User $user)
    {
        
        return view('teacher.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
        $request->validate([

            
            'gender' => 'required',
            'qualification' => 'required',
            'date_of_birth' => 'required',
        ]);

        Teacher::create([
            'user_id' => $user->id,
            'gender' => $request->gender,
            'qualification' => $request->qualification,
            'date_of_birth' => $request->date_of_birth,
        ]);
        
        return redirect()->route('teachers.index')->with('success', 'teacher created successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher, User $user)
    {
        return view('teacher.edit', compact('teacher','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'gender' => 'required',
            'qualification' => 'required',
            'date_of_birth' => 'required',
        ]);

        $teacher->update([
            'gender' => $request->gender,
            'qualification' => $request->qualification,
            'date_of_birth' => $request->date_of_birth,
        ]);

        return redirect()->route('teachers.index')->with('Success', 'Teacher updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('teachers.index')->with('Success', 'Teacher deleted Successfully');
    }
}
