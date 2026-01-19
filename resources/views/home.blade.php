@extends('layout')  
@section('title', 'Welcome | Student Portal')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 text-center border border-primary shadow">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Welcome to the Student Portal</h1>
        <p class="col-md-8 fs-4 mx-auto">
            Manage student records, view academic profiles, and update information efficiently with our centralized system.
        </p>
        <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg mt-3" type="button">
            Go to Student List
        </a>
    </div>
</div>
@endsection