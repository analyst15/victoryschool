<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Fetch all students
    public function index()
    {
        return response()->json(Student::all(), 200);
    }

    // Store a new student
    public function store(Request $request)
    {
        $request->validate([
            'admission_number' => 'required|unique:students',
            'name' => 'required|string',
            'class' => 'required|string',
        ]);

        $student = Student::create($request->all());

        return response()->json($student, 201);
    }

    // Show single student details
    public function show($id)
    {
        return response()->json(Student::findOrFail($id), 200);
    }

    // Update student details
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());

        return response()->json($student, 200);
    }

    // Delete a student
    public function destroy($id)
    {
        Student::findOrFail($id)->delete();
        return response()->json(['message' => 'Student deleted successfully'], 200);
    }
}
