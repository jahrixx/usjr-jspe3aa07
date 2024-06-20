@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header"><h3>Student List</h3></div>
        <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Student Fullname</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student) 
                            <tr>
                                <td>{{ $student->studfirstname . ' ' . ($student->studmidname ? $student->studmidname . ' ' : '') . $student->studlastname }}</td>
                                <td class="text-center"><a href="{{ route('students.show', ['studid' => $student->studid]) }}" class="btn btn-warning btn-sm"><i class="bi bieye"></i> Show</a></td>
                            </tr> 
                        @endforeach
                            <tr>
                                <td colspan="4" class="text-center">
                                    <a href="{{ url('/show/departments/') }}" class="btn btn-warning btn-sm"><i class="bi bieye"></i>Go to Departments</a>
                                </td>
                            </tr>            
                    </tbody>
                </table>

        </div>
 </div>
 @endsection