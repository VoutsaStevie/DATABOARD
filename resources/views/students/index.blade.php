@extends('layouts.layout')

@section('content')
<div class="container border mt-5 p-5 vh-50 rounded">
    <h3 style="text-align: center">Students of </h3>
    <h3 style="text-align: center">The Computer Science Department</h3>

<table class="table mt-5">
    <thead>
        <tr>
            <th style="text-align: center" scope="col">Full Name</th>
            <th style="text-align: center" scope="col">Matricule</th>
            <th style="text-align: center" scope="col">Gender</th>
            <th style="text-align: center" scope="col">Level</th>
            <th style="text-align: center" scope="col">Birth Date</th>
            <th style="text-align: center" scope="col">Email</th>
            <th style="text-align: center" scope="col">Phone</th>
            <th style="text-align: center" scope="col">Operation</th>
        </tr>
    </thead>
    @foreach ($students as $student )
        <tr>
            <td style="text-align: center">{{$student -> full_name}}</td>
            <td style="text-align: center">{{$student -> matricule}}</td>
            <td style="text-align: center">{{$student -> sex}}</td>
            <td style="text-align: center">{{$student -> level}}</td>
            <td style="text-align: center">{{$student -> birthdate}}</td>
            <td style="text-align: center">{{$student -> email}}</td>
            <td style="text-align: center">{{$student -> numero}}</td>
            <td style="text-align: center"><a href="/students/{{$student -> matricule}}/delete" class="btn btn-primary">Delete</a> </td>
        </tr>

    @endforeach
</table>
<p style="text-align: center" class="mt-5"> <a href="/students/create" class="btn btn-primary">Add Student</a>   <a href="/import_students" class="btn btn-success">Import Students</a> </p>

</div>

@endsection
