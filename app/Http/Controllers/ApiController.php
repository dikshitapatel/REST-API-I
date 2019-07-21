<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

class ApiController extends Controller
{
    public function insert(Request $request)
    {
        $students = new Student();

        $students->fname = $request->input('fname');
        $students->lname = $request->input('lname');
        $students->course = $request->input('course');

        $students->save();
        return response()->json($students);


    }


    public function fetch()
    {
        $students = Student::all();
        return response()->json($students);
    }
    public function fetchbyid($id)
    {
        $students = Student::find($id);
        return response()->json($students);
    }
    public function update(Request $request,$id)
    {
        $students =  Student::find($id);

        $students->fname = $request->input('fname');
        $students->lname = $request->input('lname');
        $students->course = $request->input('course');

        $students->save();
        return response()->json($students);


    }
    public function delete(Request $request,$id)
    {
        $students = Student::find($id);
        $students->delete();
        return response()->json($students);
    }
}
