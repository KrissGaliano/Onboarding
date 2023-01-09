<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __invoke(){

        $courses =  Course::where('status','3')->get()->take(12);


        //return Course::find(2)->rating;
        return view('welcome',compact('courses'));
    }
}

