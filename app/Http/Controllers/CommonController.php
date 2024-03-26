<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CommonController extends Controller
{
     public function index(){
       $course = Course::select('*')
                        ->where('category', 'Course' )
                      ->  get();
     $trainer = Course::select('*')
                        ->where('category', 'Trainer' )
                      ->  get();
     return view('welcome', compact('course','trainer'));
     }

     public function contact(){


     return view('common.contact' );
     }

     public function about(){


     return view('common.about' );
     }
     
     public function trainerRegistration(){
     return view('common.trainerRegistration' );
     }
     public function trainerTeacher(){
     return view('common.trainerTeacher' );
     }
     public function english(){
     return view('common.english' );
     }
     public function fillGap(){
     return view('common.fillGap' );
     }
     public function peopleAndRelationship(){
     return view('common.peopleAndRelationship' );
     }
     public function englishPractice(){
     return view('common.englishPractice' );
     }
     public function demo(){
     return view('demo' );
     }
     public function new(){
     return view('new' );
     }
     
     public function webDevelopment(){return view('ourService.webDevelopment');}
     public function android(){return view('ourService.android');}
     public function digitalMarketing1(){return view('ourService.digitalMarketing1');}
     public function freelancing(){return view('ourService.freelancing');}
     
     public function hsc(){
     return view('common.hsc' );
     }
     
      public function details(){


     return view('common.details' );
     }

     public function trainers(){
         $trainer = Course::select('*')
                        ->where('category', 'Trainer' )
                      ->  get();

     return view('common.trainers',compact('trainer'));
     }

     public function courses(){
       $course = Course::select('*')
                        ->where('category', 'course' )
                      ->  get();


     return view('common.courses',compact('course'));
     }
     public function freelancingRegistration(){
        return view('common.freelancingRegistration' );
     }
    public function commonRegistration(){
        return view('common.commonRegistration' );
     }

}
