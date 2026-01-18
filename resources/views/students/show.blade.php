@extends('layout')

@section('content')
<div class="card mx-auto" style="max-width: 600px;">
    <div class="card-header bg-info text-white">
        <h4 class="mb-0">Student Profile</h4>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label class="fw-bold">Name:</label>
            <p class="form-control-plaintext">test1</p>
        </div>
        <div class="mb-3">
            <label class="fw-bold">Email:</label>
            <p class="form-control-plaintext">test@knadn.com</p>
        </div>
        <div class="mb-3">
            <label class="fw-bold">Course:</label>
            <p class="form-control-plaintext">BSCS-1A</p>
        </div>
        <div class="mb-3">
            <label class="fw-bold">Year Level:</label>
            <p class="form-control-plaintext">1st Year</p>
        </div>

        <hr>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to Student List</a>
    </div>
</div>
@endsection