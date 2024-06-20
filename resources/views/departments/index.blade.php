
@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header"><h3>List Of Departments</h3></div>
        <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Department ID</th>
                            <th scope="col">Department Fullname</th>
                            <th scope="col">Department Shortname</th>
                            <th scope="col">Department College ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                                <td>{{ $department->deptid }}</td>
                                <td>{{ $department->deptfullname }}</td>
                                <td>{{ $department->deptshortname }}</td>
                                <td>{{ $department->deptcollid }}</td>
                            </tr> 
                        @endforeach
                            <tr>
                                <td colspan="4" class="text-center">
                                    <a href="{{ route('colleges.index') }}" class="btn btn-warning btn-sm"><i class="bi bieye"></i>Back to Colleges</a>
                                    <a href="{{ route('students.index') }}" class="btn btn-warning btn-sm"><i class="bi bieye"></i>Back to Students</a>
                                </td>
                            </tr>
                                         
                    </tbody>
                </table>

        </div>
 </div>
 @endsection