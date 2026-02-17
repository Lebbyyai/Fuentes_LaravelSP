@extends('layout')

@section('title', 'Add New Student')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Add New Student</h5>
            </div>
            <div class="card-body">
                
                <form action="{{ route('students.store') }}" method="POST">
                    
                    @csrf

                    <div class="mb-3">
                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="e.g. Juan Dela Cruz" required>
                    </div>

                    <div class="mb-3">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="e.g. juan@university.edu" required>
                    </div>

                    <div class="mb-3">
                        <label>Course</label>
                        <input type="text" name="course" class="form-control" placeholder="e.g. BS Information Technology" required>
                    </div>

                    <div class="mb-3">
                        <label>Year Level</label>
                        <input type="number" name="year_level" class="form-control" placeholder="1-5" min="1" max="5" required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Save Student</button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection