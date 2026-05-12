<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Teacher;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Classes::all();

        return view('classs.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::all();
        return view('classs.create',compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'teacher_id' => 'required',
            'class_name' => 'required',
            'level' => 'required',
        ]);
        Classes::create([
            'teacher_id' => $request->teacher_id,
            'class_name' => $request->class_name,
            'level' => $request->level
        ]);

        return redirect()->route('classes.index')->with('Success', 'Class creaated Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classes $class)
    {
        return view('classs.edit', compact('class'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classes $class)
    {
           $request->validate([
                'class_name' => 'required',
                'level' => 'required',
        ]);

        $class->update([
            'class_name' => $request->class_name,
            'level' => $request->level,
        ]);

        return redirect()->route('classes.index')->with('Success', 'Class updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classes $class)
    {
        $class->delete();
         return redirect()->route('classes.index')->with('Success', 'Class deleted succesfully');
    }
}
