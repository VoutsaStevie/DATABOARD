@extends('layouts.layout')

@section('content')

    <div class="container mt-5 w-">


        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="number" min="2015" name="year" class="form-control" id="matricule">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date" class="form-control" id="date">
            </div>
            <div class="mb-3">
                <label for="matricule" class="form-label">semester</label>
                <input type="number" min="1" max="2" name="semester" class="form-control" id="semester">

            </div>
            <div class="mb-3 w-50">
                <label for="csv-file" class="form-label">Import Courses</label>
                <input class="form-control mb-3" name="csv_file" type="file" id="csv_file">

                <button type="submit" class="btn btn-primary mb-3">Upload</button>
            </div>

        </form>
    </div>

@endsection
