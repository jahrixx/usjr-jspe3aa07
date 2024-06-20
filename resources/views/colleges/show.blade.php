@extends('layouts.app')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-bordered">
                            <thead>
                                    <tr>
                                        <th scope="col" colspan="3" class="text-center"><h2>College</h2></th>
                                    </tr>
                                    <tr>
                                        <th scope="col"><h2>{{ $college->collid }}</h2></th>
                                        <th scope="col"><h2>{{ $college->collfullname }}</h2></th>
                                        <th scope="col"><h2>{{ $college->collshortname }}</h2></th>
                                    </tr> 
                            </thead>
                        </table>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
                @foreach ($college->departments as $department)
                <div class="card mb-4">        
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                    <tr>
                                        <th scope="col" colspan="4" class="text-center">Department</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">{{ $department->deptid }}</th>
                                        <th scope="col">{{ $department->deptfullname }}</th>
                                        <th scope="col">{{ $department->deptshortname }}</th>
                                        <th scope="col">{{ $department->deptcollid }}</th>
                                    </tr> 
                            </thead>
                        </table>
                        @if ($department->programs->isEmpty())
                            <p>No programs available.</p>
                        @else
                            
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="5" class="text-center">Programs</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Program ID</th>
                                        <th scope="col">Program Fullname</th>
                                        <th scope="col">Program Shortname</th>
                                        <th scope="col">Program College ID</th>
                                        <th scope="col">Program College Department ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($department->programs as $program)
                                    <tr>
                                        <td>{{ $program->progid }}</td>
                                        <td>{{ $program->progfullname }}</td>
                                        <td>{{ $program->progshortname }}</td>
                                        <td>{{ $program->progcollid }}</td>
                                        <td>{{ $program->progcolldeptid }}</td>
                                    </tr> 
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <span class="text-center"><a href="{{ route('colleges.index') }}" class="btn btn-warning btn-sm"><i class="bi bieye"></i>Back To College List</a></span>
    </div>
</div>
@endsection
