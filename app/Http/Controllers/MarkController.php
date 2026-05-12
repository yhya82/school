<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mark;
use App\Models\Student;
use App\Models\Subject;
use App\Services\markService;

class MarkController extends Controller
    {
    protected $markService;

        public function __construct(MarkService $markservice){
            $this->markService = $markservice;
        }

    public function index()
    {
        $marks = Mark::all();

        return view('mark.index',compact('marks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Student $student)
    {
        $subjects = Subject::all();
        return view('mark.create',compact('student','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Student $student)
    {
       $validated = $request->validate([
                         'subject_id' => 'required',
                        'score' => 'required|min:0|max:100',
                        
        ]);
       
        try{
            
             $this->markService->addMarks($validated,$student);
                
               return redirect()->route('students.index')->with('Success', 'Mark Created Successfully');

        }catch(\Exception $e){

                return redirect()->back()->with('error',$e->getMessage());
        }
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
    public function edit(Mark $mark)
    {
        $subjects = Subject::all();
        return view('mark.edit',compact('mark','subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mark $mark)
    {
      $validated =  $request->validate([
            'subject_id' => 'required',
            'score' => 'required',
        ]);
            try{
                $this->markService->updateMark($validated,$mark);

            }catch(\Exception $e){
                
                return redirect()->back()->with('error',$e->getMessage());
            }
    return redirect()->route('students.index')->with('Succes','Mark updated succefully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mark $mark)
    {
        $mark->delete();

        return redirect()->route('mark.index')->with('Success', 'Mark deleted Successfully');
    }
}
