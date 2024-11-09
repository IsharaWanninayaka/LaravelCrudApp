<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getStudent(){
        $students = student::all();
        return view('pages.index',compact('students'));
    }
    public function storeStudent(Request $request){
        $validateData = $request-> validate([
            'name'=> 'required|string',
            'email'=> 'required|string|email',
            'phone'=> 'required|string',
        ]);

        student::create($validateData);
        return redirect('/student')->with('success', 'Student created successfully!');
    }

    public function createStudent(){
        return view('pages.create');
    }
    public function updateStudent($id){
        $student = student::findOrFail($id);
        return view('pages.update',compact('student'));
    }
    public function update(Request $request,$id){
       $validateData = $request->validate([
        'name'=> 'required|string',
        'email'=> 'required|string|email',
        'phone'=> 'required|string'
       ]);
       $student = student::findOrFail($id);
       $student->update($validateData);
       return redirect('/student')->with('success','Student updated successfully!');
    }

    public function deleteStudent($id){
        $student = student::findOrFail($id);
        $student->delete();
        return redirect('/student')->with('success','student deleted successfully!');
    }
}
