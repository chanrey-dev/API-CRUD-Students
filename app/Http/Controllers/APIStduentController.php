<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Import the Student model


class APIStduentController extends Controller
{
    //index
    public function index(){
        $student = Student::all();

        return response()->json([
            'success' => true,
            'data' => $student,
        ], 200);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'age' => 'required|string|max:10',
            'address' => 'required|string|max:255',
        ]);

        $students = Student::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'age' => $request->age,
            'address' => $request->address,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Student created successfully!',
            'data' => $students,
        ],201);
    }

    public function delete(Request $request, $id){
        $student = Student::find($id);

        if(!$student){
            return response()->json([
                'success' => false,
                'message' => 'Not found student',
            ], 404);
        }

        $student->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete success!',
        ],201);
    }
}
