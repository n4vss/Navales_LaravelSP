@extends('layout')

@section('title', 'Student List') {{-- Setting the page title --}}

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Student List</h2>
    <a href="{{ route('students.create') }}" class="btn btn-success">Add New Student</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['course'] }}</td>
                    <td>{{ $user['year'] }}</td>
                    <td>
                        <x-actionButton 
                            href="{{ url('/students/' . $user['id']) }}" 
                            type="view">
                            View
                        </x-actionButton>   
                        <x-actionButton 
                            href="{{ url('/students/' . $user['id'] . '/edit') }}" 
                            type="edit">
                            Edit
                        </x-actionButton>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection