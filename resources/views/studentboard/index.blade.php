@extends('layouts.studentDashboard')

@section('content')
<div style="margin-top: 200px" class="container border p-5 vh-50 rounded">

<h1 style="text-align: center">First Semester Exam</h1>
    <div style="text-align: center" class="container mb-5">
        <div class="text-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVTtlOwG_6l93Lo3NcGZcQpGx4LXNwa3lF5A&usqp=CAU" class="rounded" alt="...">
          </div>
        <p>Student : {{$fullname}} </p>
        <p>Matricule : {{$matricule}} </p>



    </div>

    <table class="table">
        <thead>
            <tr>
                <th style="text-align: center" scope="col">Year</th>
                <th style="text-align: center" scope="col">Semester</th>
                <th style="text-align: center" scope="col">Course Code</th>
                <th style="text-align: center" scope="col">CA Note (/20)</th>
                <th style="text-align: center" scope="col">SN Note (/40)</th>
                <th style="text-align: center" scope="col">TP Note (/40)</th>
                <th style="text-align: center" scope="col">Total (/100)</th>


            </tr>
        </thead>

@foreach ($marks as $mark )
<tr>

    <td style="text-align: center">{{$mark -> year}}</td>
    <td style="text-align: center">{{$mark -> semester}}</td>
    <td style="text-align: center">{{$mark -> coursecode}}</td>
    <td style="text-align: center">{{$mark -> camark}}</td>
    <td style="text-align: center">{{$mark -> snmark}}</td>
    <td style="text-align: center">{{$mark -> tpmark}}</td>
    <td style="text-align: center">{{$mark -> total}}</td>



  </tr>

@endforeach
    </table>
    <p class="text-center"><a href="/marks/generatePdf?fullname={{ $fullname }}&matricule={{ $matricule }}" class="btn btn-success"> Download </a></p>
</div>
@endsection
