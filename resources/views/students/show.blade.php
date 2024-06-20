@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header"><h3>Student ID: {{ $student->studid }}</h3></div>
        <div class="card-body">
                <table class="table table-striped table-bordered">
                    <tbody>
                            <tr>
                                <td><b>Student Fullname:</b></td>
                                <td>{{ $student->studfirstname . ' ' . ($student->studmidname ? $student->studmidname . ' ' : '') . $student->studlastname }}</td>
                            </tr>
                            <tr>
                                <td><b>Program ID:</b></td>
                                <td>{{ $student->studprogid }}</td>
                            </tr>
                            <tr>
                                <td><b>College ID:</b></td>
                                <td>{{ $student->studcollid }}</td>
                            </tr>
                            <tr>
                                <td><b>Student Year:</b></td>
                                <td>{{ $student->studyear }}</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-center"><a href="{{ route('students.index') }}" class="btn btn-warning btn-sm"><i class="bi bieye"></i>Back to All Students</a></td>
                            </tr> 
                    </tbody>
                </table>

        </div>
 </div>
 @endsection