@extends('layouts.landing')

@section('content')
<div class="banner" style="background-color:" >
  <div class="container">

  </div>
</div>
<div class="flex-wrap p-5 d-flex justify-content-center align-items-stretch" style="width: 100%;">
    @foreach ($infos as $info )
    <a href="/info/{{$info -> id}}">
    <div class="m-4 text-center border rounded card" style="width: 360px; over">
        <img src="https://resources.workable.com/wp-content/uploads/2017/03/Recruiting-via-text-message.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h1 class="card-title"> {{$info -> title}} </h1>
          <p class="card-text"> {{$info -> content}} </p>

          <h5>Published by: {{$info -> autheur}} </h5>
          <h6>On: {{$info -> created_at}} </h6>
          </div>
      </div>
    </a>
    @endforeach
</div>
@endsection
