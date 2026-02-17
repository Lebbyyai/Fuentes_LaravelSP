@extends('layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Student List</h1>
    <a href="{{ route('students.create') }}" class="btn btn-success">Add New Student</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-hover table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Actions</th>
                </tr>
            </thead>
           <tbody>
                @foreach ($students as $student)
    <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->course }}</td>
        <td>{{ $student->year_level }}</td>
        <td>
            <div class="d-flex gap-1">
                <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm text-white">View</a>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Delete?')" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </td>
    </tr>
@endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection