@extends('layouts.landing')
<div class="container border border-dark vh-100" style="width: 90%;text-align:center; justify-content:space-evenly;">
  <div class="container ">
        <h4>Published by: {{$infos -> author}} </h4>
        <h4>On: {{$infos -> created_at}} </h4>
  </div>
  <div class="mt-5 text-center" style="width: 100%; ">
    <iframe  style="width: 100%; height:70vh" src="{{/assets/{{$infos-> file}}}}" frameborder="0"></iframe>
          <h1 class="mb-5 card-title"> {{$infos -> title}} </h1>
          <p class="card-text"> {{$infos -> content}} </p>
  </div>
</div>
