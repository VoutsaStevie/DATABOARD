<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>{{ $title }}</title>
</head>
<body>

        <h1 style="text-align: center">First Semester Exam</h1>
            <div style="text-align: center" class="container mb-5">
                <div class="text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVTtlOwG_6l93Lo3NcGZcQpGx4LXNwa3lF5A&usqp=CAU" class="rounded" alt="...">
                  </div>
                <p>Student : {{$fullname}} </p>
                <p>Matricule : {{$matricule}} </p>
        
                
        
            </div>
        <p style="text-align: center">
            <table class="table">
                <thead>
                    <tr>
                        
                        <th style="text-align: center" scope="col">Course Code</th>
                        <th style="text-align: center" scope="col">CA Note (/20)</th>
                        <th style="text-align: center" scope="col">SN Note (/20)</th>
                        <th style="text-align: center" scope="col">Total (/20)</th>
        
        
                    </tr>
                </thead>
              
        @foreach ($marks as $mark )
        <tr>
              
            
            <td style="text-align: center">{{$mark -> coursecode}}</td>
            <td style="text-align: center">{{$mark -> camark}}</td>
            <td style="text-align: center">{{$mark -> snmark}}</td>
            <td style="text-align: center">{{$mark -> total}}</td>
        
        
        
          </tr>
            
        @endforeach
            </table>
        </p>
</body>
</html>