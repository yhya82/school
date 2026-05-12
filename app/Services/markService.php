<?php
namespace App\Services;
use App\Models\Mark;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\throwException;

class MarkService{
    public function addMarks($validated,$student){
        
        return DB::transaction(function() use($validated,$student){
                
            if ($validated['score'] < 0 || $validated['score'] > 100) {
            throw new \Exception('Invalid score');
            }
                    //auto calculate grade
                    $grade = $this->CalculateGrade($validated['score']);
                    
                 $mark =   Mark::create([
                        'student_id'=> $student->id,
                        'subject_id' => $validated['subject_id'],
                        'score' => $validated['score'],
                        'grade' => $grade,
                    ]);

                    

                return [
                    'mark' => $mark,
                    'message' => 'Mark created succesfully',
                ];
                
        });
    }

    public function CalculateGrade($score){
                  
            if($score>=80){
                return 'A';
            }
              if($score>=70){
                return 'B';
            }
              if($score>=60){
                return 'C';
            }
              if($score>=50){
                return 'D';
            }

            return 'F';

     }

     public function updateMark($validated, $mark){

            $grade = $this->calculateGrade($validated['score']);

            $mark->update([
                'subject_id' => $validated['subject_id'],
                'score' => $validated['score'],
                'grade' => $grade,
            ]);


     }

}