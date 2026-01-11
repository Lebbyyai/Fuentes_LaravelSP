@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Edit Student</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label>Full Name</label>
                        <input type="text" class="form-control" value="John Doe">
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" value="johndoe@example.com">
                    </div>
                    <div class="mb-3">
                        <label>Course</label>
                        <input type="text" class="form-control" value="BS Computer Science">
                    </div>
                    <div class="mb-3">
                        <label>Year Level</label>
                        <input type="number" class="form-control" value="3">
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