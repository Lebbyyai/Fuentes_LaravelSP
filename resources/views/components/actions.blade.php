<div class="d-inline-flex gap-1">
    <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm text-white">View</a>
    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
</div>