<?php

namespace App\Http\Controllers;
use App\Lesson;
use App\Course;
use App\Word;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    //
    public function getLesson($id){
    	$lesson = Lesson::where('course_id',$id)->get();
    	return view('user.page.lesson',compact('lesson'));
    }
    public function getCreateLesson($id){
    	$course = Course::find($id);
    	return view('user.page.createlesson',compact('course'));
    }
    public function postCreateLesson(Request $req,$id){
    	$course = Course::find($id);
    	$lesson = new Lesson;

    }
    
}
