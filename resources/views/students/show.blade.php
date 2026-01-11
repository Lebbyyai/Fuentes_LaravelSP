@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Student Profile</h4>
            </div>
            <div class="card-body">
                <h5 class="card-title">John Doe</h5>
                <h6 class="card-subtitle mb-2 text-muted">BS Computer Science - 3rd Year</h6>
                
                <hr>
                
                <p class="card-text">
                    <strong>Email:</strong> johndoe@example.com<br>
                    <strong>Student ID:</strong> 2023-0001<br>
                    <strong>Address:</strong> 123 Main St, Cityville
                </p>

                <div class="mt-4">
                    <a href="{{ route('students.index') }}" class="btn btn-primary">Back to Student List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection