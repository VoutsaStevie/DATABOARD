@extends('layouts.layout')

@section('content')
<div class="container border w-50 mt-5 p-5 vh-50 rounded">
    <h3 style="text-align: center">Speciality list for </h3>
    <h3 style="text-align: center">The Computer Science Department</h3>

<table class="table mt-5">
    <thead>
        <tr>
            <th style="text-align: center" scope="col">Id</th>
            <th style="text-align: center" scope="col">Filiere</th>
            <th style="text-align: center" scope="col">Operations</th>
        </tr>
    </thead>

@foreach ($specialities as $speciality )
<tr>

<td style="text-align: center">{{$speciality -> id}}</td>
<td style="text-align: center">{{$speciality -> speciality}}</td>
<td style="text-align: center"><a href="/specialities/{{$speciality -> id}}" class="btn btn-primary">Delete</a> </td>

</tr>

@endforeach
</table>
<p style="text-align: center" class="mt-5"> <a href=" {{route('specialities.create')}} " class="btn btn-primary">Add Filier</a> </p>

</div>
@endsection
