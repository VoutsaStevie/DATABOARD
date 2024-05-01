@extends('layouts.layout')

@section('content')
<div class="container my-auto">

    <form method="POST" action=" {{route('specialities.index')}} " class=" mx-auto mt-5 w-50">
      @csrf
        <div class="mb-3">
            <label for="speciality" class="form-label">Speciality</label>
            <input type="text"  @required(true) class="form-control" name="speciality" id="speciality" placeholder="speciality">
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
