
@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header"><h3>List Of Colleges</h3></div>
        <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">College ID</th>
                            <th scope="col">College Fullname</th>
                            <th scope="col">College Shortname</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($colleges as $college)
                            <tr>
                                <td>{{ $college->collid }}</td>
                                <td>{{ $college->collfullname }}</td>
                                <td>{{ $college->collshortname }}</td>
                                <td class="text-center"><a href="{{ route('colleges.show', ['collid' => $college->collid]) }}" class="btn btn-warning btn-sm"><i class="bi bieye"></i> View Details</a></td>
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