@extends('layout')

@section('title', 'Student Details')

@section('content')
<div class="card mx-auto mt-5 border-primary shadow" style="max-width: 600px;">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Student Details</h5>
    </div>
    <div class="card-body bg-light">
        <h3 class="card-title text-primary">Allen Bagsakan</h3>
        <p class="text-muted">BS Civil Engineering | 5th Year</p>
        <hr>
        <div class="mb-3">
            <strong>Email:</strong> <br>
            allen.bagsakan@university.edu
        </div>
        <div class="mb-3">
            <strong>Student ID:</strong> <br>
            2023-00123
        </div>
        <div class="mb-3">
            <strong>Address:</strong> <br>
            Davao City, Philippines
        </div>

        <div class="d-flex justify-content-end gap-2 mt-4">
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
            <a href="{{ route('students.edit') }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection