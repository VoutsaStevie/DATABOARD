@extends('layouts.studentDashboard')
@section('content')
<div class="container border border-green vh-100" style="width: 90%;text-align:center; justify-content:space-evenly;margin-top:100px">

    <div class="text-center mt-5" style="width: 100%; ">

        <h1 class="card-title mb-5"> {{$file -> title}} </h1>

    </div>

    <div class="container">
        <iframe  style="width: 100%; height:70vh" src="/assets/{{$file-> file}}" frameborder="0"></iframe>
        <p>{{$file-> file}}</p>
        <p class="card-text"> {{$file -> description}} </p>


    </div>

  </div>

  @endsection
