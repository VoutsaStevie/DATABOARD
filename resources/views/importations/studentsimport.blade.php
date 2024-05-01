@extends('layouts.layout')

@section('content')

    <div class="container mt-5 w-">

        
        <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 w-50">
                <label for="csv-file" class="form-label">Import Courses</label>
                <input class="form-control mb-3" name="csv_file" type="file" id="csv_file">
                
                <button type="submit" class="btn btn-primary mb-3">Upload</button>
            </div>
        
        </form>
    </div>

@endsection