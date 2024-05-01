@extends('layouts.layout')

@section('content')
<div class="container border mt-5 p-5 vh-50 rounded">
    <h3 style="text-align: center">All Courses of </h3>
    <h3 style="text-align: center">The Computer Science Department</h3>

<table class="table mt-5">
    <thead>
        <tr>
            <th style="text-align: center" scope="col">Course Title</th>
            <th style="text-align: center" scope="col">Course Code</th>
            <th style="text-align: center" scope="col">Operation</th>
        </tr>
    </thead>

@foreach ($courses as $course )
<tr>

<td style="text-align: center">{{$course -> coursetitle}}</td>
<td style="text-align: center">{{$course -> coursecode}}</td>
<td style="text-align: center"><a href="/course/{{$course -> coursecode}}/delete" class="btn btn-primary">Delete</a> </td>


</tr>

@endforeach
</table>
<p style="text-align: center" class="mt-5"> <a href="/course/create" class="btn btn-primary">Add Courses</a>  <a href="/import_courses" class="btn btn-success">Import Courses</a> </p>



</div>

@endsection
