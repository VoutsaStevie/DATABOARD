@extends('layouts.layout')

@section('content')
<div class="flex-wrap p-5 d-flex justify-content-center align-items-stretch" style="width: 100%;">
    @foreach ($infos as $info )
    <div class="m-4 text-center border rounded card" style="width: 360px; over">
        <img src="{{asset('images/img20.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Destination: {{$info -> destination}}</h5>
          <h4 class="card-title"> {{$info -> title}}</h4>
          <p class="card-text"> {{$info -> content}}</p>
          <a class="btn btn-primary" href="/all_infos/show/{{$info -> id}}" style="background-color: #007bff; color: white;">Details</a>
          <a class="btn btn-danger" href="/delete_infos/{{$info->id}}" style="background-color: #F50012; color: white;">Delete</a>
          </div>
      </div>
    @endforeach
</div>
<div class="d-flex justify-content-center banner" style="background-color:" >
    <div class="container">
      <div class="container"><a class="btn btn-primary" href="{{route('info.create')}}">Add  <br> Announcement</a></div>
    </div>
  </div>
<div class="container">
</div>
@endsection
