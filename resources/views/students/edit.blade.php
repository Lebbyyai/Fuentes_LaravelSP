@extends('layout')

@section('title', 'Edit Student')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header bg-warning">
                <h5 class="mb-0">Edit Student Details</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $student->email }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Course</label>
                        <input type="text" name="course" class="form-control" value="{{ $student->course }}" required>
                    </div>

                    <div class="mb-3">
                        <label>Year Level</label>
                        <input type="number" name="year_level" class="form-control" value="{{ $student->year_level }}" min="1" max="5" required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection