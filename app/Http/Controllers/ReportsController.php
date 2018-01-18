<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Subjects;
use App\Models\SubjectCourse;
use App\Models\SubjectTopic;
use App\Models\Topic;
use App\User;
use App\Quiz;
use App\Exam;
use App\QuizRecord;
use App\ExamRecord;
use Auth;
class ReportsController extends Controller
{
      
    public function userReport()
    {
        return view('reports.userReport');
    }

    public function subjectReport()
    {
        return view('reports.subjectReport')
            ->with([
                'subjects'=>Subjects::all(),
                'subj_courses'=>SubjectCourse::all(),
                'courses'=>Course::all(),
                'lecturers'=>User::all()
            ]);
                
        
    }

     public function courseReport()
    {
        return view('reports.courseReport')
            ->with([
                'courses'=>Course::all()
            ]);
                
        
    }
      public function learningresourcesReport()
    {
        return view('reports.learningResources')
            ->with([
                'subjects'=>Subjects::all(),
                'subj_courses'=>SubjectCourse::all(),
                'syllabuses'=>Topic::All(),
                'courses'=>Course::all(),
                'lecturers'=>User::all(),
                'topics'=>SubjectTopic::all()
            ]);
    }

     public function quizReport()
    {
        return view('reports.quizReport')
            ->with([
                'quizes'=>Quiz::all(),
                'subjects'=>Subjects::all(),
                'syllabuses'=>Topic::all()
            ]);
    }

     public function quizStatsReport($quiz_id)
    {
        return view('reports.quizStats')
            ->with([
                'quiz_stats'=>QuizRecord::where('quiz_id', $quiz_id)->get()
            ]);
    }

    public function achieverWall()
    {
        if(Auth::user()->role_id==3){
            return view('reports.achiverswall')
            ->with([
                'distinct_exams'=>ExamRecord::distinct()->get(['quiz_id']),
                'exams'=>ExamRecord::where('pass_fail', 'pass')->where('lecturer_id', Auth::user()->id)->get(),
                'subjects'=>Subjects::all(),
            ]);
        }
        else{
            return view('reports.achiverswall')
            ->with([
                'distinct_exams'=>ExamRecord::distinct()->get(['quiz_id']),
                'exams'=>ExamRecord::where('pass_fail', 'pass')->get(),
                'subjects'=>Subjects::all(),
            ]);
        }
    }

    public function examReport()
    {
        return view('reports.examReport')
            ->with([
                'distinct_exams'=>ExamRecord::distinct()->get(['quiz_id']),
                'exams'=>ExamRecord::all(),
                'subjects'=>Subjects::all(),
            ]);
    }

    public function examQuestioncReport($subject_id)
    {
        return view('reports.examQuestionReport')
            ->with([
                'questions'=>Exam::where('subject_id', $subject_id)->get(),
            ]);
    }

    public function learningresourcesReportSyllabus($subject_id){
        $subjects = Subjects::find($subject_id);
        return view('reports.learningResourcesTopic')
            ->with([
                'subjects'=>Subjects::find($subject_id),
                'syllabuses'=>Topic::where('subject_id', $subject_id)->get(),
                'subj_courses'=>SubjectCourse::all(),
                'courses'=>Course::all(),
                'topics'=>SubjectTopic::all()
            ]);
    }

    public function learningresourcesReportTopic($subject_id, $syllabus_id){
        $subjects = Subjects::find($subject_id);
        return view('reports.learningResourcesTopic1')
            ->with([
                'subjects'=>Subjects::find($subject_id),
                'syllabuses'=>Topic::where('subject_id', $subject_id)->get(),
                'subj_courses'=>SubjectCourse::all(),
                'courses'=>Course::all(),
                'topics'=>SubjectTopic::where('syllabus_id', $syllabus_id)->get(),
            ]);
    }

    public function allUsers(){
        return view('reports.userReport')
            ->with([
                'users'=>User::all()
            ]);
    }

    public function lecturerUsers(){
        return view('reports.userReportLecturer')
            ->with([
                'users'=>User::where('role_id', 3)->get()
            ]);
    }

    public function studentUsers(){
        return view('reports.userReporStudent')
            ->with([
                'users'=>User::where('role_id', 4)->get()
            ]);
    }

    public function acadUsers(){
        return view('reports.userReportAcad')
            ->with([
                'users'=>User::where('role_id', 2)->get()
            ]);
    }

    public function registrarUsers(){
        return view('reports.userReportRegistrar')
            ->with([
                'users'=>User::where('role_id', 1)->get()
            ]);
    }
}
