@extends('layout')

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
                    <th>Email</th>
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
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['course'] }}</td>
                    <td>{{ $user['year'] }}</td>
                    <td>
                        <a href="{{ url('/students/' . $user['id']) }}" class="btn btn-sm btn-info text-white">View</a>
                        <a href="{{ url('/students/' . $user['id'] . '/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection