<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\College;
use App\Models\Department;
use App\Models\Program;

class UniversityController extends Controller
{
    public function showAllStudents()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function showStudent($studid)
    {
        $student = Student::findOrFail($studid);
        return view('students.show', compact('student'));
    }


    public function showAllColleges()
    {
        $colleges = College::all();
        return view('colleges.index', compact('colleges'));
    }

    public function showCollege($collid)
    {
        $college = College::with('departments.programs')->findOrFail($collid);
        return view('colleges.show', compact('college'));
    }


    public function showAllDepartments()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }
}
