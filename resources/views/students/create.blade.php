@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Add New Student</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label>Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter name">
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="mb-3">
                        <label>Course</label>
                        <input type="text" class="form-control" placeholder="Enter course">
                    </div>
                    <div class="mb-3">
                        <label>Year Level</label>
                        <input type="number" class="form-control" placeholder="Enter year level">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Save Student</button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection