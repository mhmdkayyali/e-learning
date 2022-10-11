<?php

namespace App\Http\Controllers;
use App\Models\Course;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function createCourse(Request $request){
        $courses = Course::create([
            "crn" => $request->crn,
            "course_name" => $request->course_name,
            "time" => $request->time,
            "instructor_id" => $request->instructor_id
        ]);
        return response()->json([
            "status" => "Success"
        ]);
    }

    function getInformation(Request $request) {
        $get_information = Course::select("*")
                                    ->get();
        return response()->json([
            "Status" => "Success",
            "response" => $get_information
        ]);
    }
    
}
