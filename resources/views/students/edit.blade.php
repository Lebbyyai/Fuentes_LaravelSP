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
                <form>
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" class="form-control" value="Allen Bagsakan">
                    </div>
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" value="allen.bagsakan@university.edu">
                    </div>
                    <div class="mb-3">
                        <label>Course</label>
                        <input type="text" class="form-control" value="BS Civil Engineering">
                    </div>
                    <div class="mb-3">
                        <label>Year Level</label>
                        <input type="number" class="form-control" value="5">
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
