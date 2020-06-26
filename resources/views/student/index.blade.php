@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-light d-flex justify-content-between align-items-center">
                    <h5>All Students</h5>
                    <a href="{{ route('student.create') }}" class="btn btn-light">Create Student</a>
                </div>

                <div class="card-body">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td> {{ $student->id }} </td>
                                <td> {{ $student->name }} </td>
                                <td> {{ $student->email }} </td>
                                <td> 
                                    <a href="{{ route('student.edit',['id'=> $student->id]) }}" class="btn btn-warning">Edit</a>
                                    <a href="{{ route('student.delete',['id'=> $student->id])}}" onclick="confirm('Are you sure you want to delete this student?')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>    
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
