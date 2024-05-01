@extends('layouts.layout')

@section('content')
<div class="container p-5 mt-5 border rounded vh-50">
    <h3 style="text-align: center">All Student Marks of </h3>
    <h3 style="text-align: center">The Computer Science Department</h3>

<table class="table mt-5">
    <thead>
        <tr>

            <th style="text-align: center" scope="col">Matricule</th>
            <th style="text-align: center" scope="col">Course Code</th>
            <th style="text-align: center" scope="col">CA mark</th>
            <th style="text-align: center" scope="col">SN mark</th>
            <th style="text-align: center" scope="col">TP mark</th>
            <th style="text-align: center" scope="col">Year</th>
            <th style="text-align: center" scope="col">Semester</th>
            <th style="text-align: center" scope="col">Total</th>
            <th style="text-align: center" scope="col">Operation</th>

        </tr>
    </thead>

@foreach ($marks as $mark )
<tr>
<td style="text-align: center">{{$mark -> studentmatricule}}</td>

<!--<td style="text-align: center">{{$mark -> coursename}}</td>-->
<td style="text-align: center">{{$mark -> coursecode}}</td>
<td style="text-align: center">{{$mark -> camark}}</td>
<td style="text-align: center">{{$mark -> snmark}}</td>
<td style="text-align: center">{{$mark -> tpmark}}</td>
<td style="text-align: center">{{$mark -> year}}</td>
<td style="text-align: center">{{$mark -> semester}}</td>
<td style="text-align: center">{{$mark -> total}}</td>
<td style="text-align: center">
<div>
    <a href="" class="btn btn-danger">Delete</a>
    <a href="" class="btn btn-success">Update</a>

</div>
</td>


</tr>

@endforeach
</table>
        <p style="text-align: center" class="mt-5">
            <a href="/marks/create" class="btn btn-primary">Add Reccords</a>
            <a href="/import_marks" class="btn btn-success">Import Marks</a>
        </p>

</div>

@endsection
