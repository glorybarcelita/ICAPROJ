<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentExam;
use Auth;

class StudentExamController extends Controller
{
    public function takeExam(Request $request){
      $take_exam = new StudentExam;
      $take_exam->student_id=Auth::user()->id;
      $take_exam->subject_exam_id=$request->subject_exam_id;
      $take_exam->save();

      return redirect('exams/'.$request->subject_exam_id);
      // return redirect()->route('exams', [$request->subject_exam_id]);
    }
}
