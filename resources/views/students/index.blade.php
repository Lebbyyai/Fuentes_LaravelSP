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
                <tr>
                    <td>Allen Bagsakan</td>
                    <td>allen.bagsakan@university.edu</td>
                    <td>BS Civil Engineering</td>
                    <td>5th Year</td>
                    <td>
                        <x-actions />  </td>
                </tr>

                <tr>
                    <td>Maria Spacool</td>
                    <td>maria.spacool@university.edu</td>
                    <td>BS Tourism Management</td>
                    <td>3rd Year</td>
                    <td>
                        <x-actions />
                    </td>
                </tr>

                <tr>
                    <td>Ana Bughatan</td>
                    <td>ana.bughatan@university.edu</td>
                    <td>BS Nursing</td>
                    <td>2nd Year</td>
                    <td>
                        <x-actions />
                    </td>
                </tr>

                <tr>
                    <td>John Dikit</td>
                    <td>john.dikit@university.edu</td>
                    <td>BS Information Technology</td>
                    <td>1st Year</td>
                    <td>
                        <x-actions />
                    </td>
                </tr>

                <tr>
                    <td>Sampal Fukiko</td>
                    <td>sampal.fukiko@university.edu</td>
                    <td>BS Criminology</td>
                    <td>4th Year</td>
                    <td>
                        <x-actions />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection