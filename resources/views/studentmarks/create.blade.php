

    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Marks Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      </head>
      <body>

    <div class="container border rounded p-4 mt-5">
        <form method="post">
            @csrf
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="number" name="year" class="form-control" id="matricule">
            </div>
            <div class="mb-3">
                <label for="semester" class="form-label">semester</label>
                <input type="number" min="1" max="2" name="semester" class="form-control" id="semester">

            </div>
            <div class="mb-3">
                <label for="matricule" class="form-label">matricule</label>
                <input type="text" name="matricule" class="form-control" id="matricule">
            </div>
            <div class="mb-3">
                <label for="coursecode" class="form-label">Course Code</label>
                <input type="text" class="form-control" name="coursecode" id="coursecode">
            </div>
            <div class="mb-3">
                <label for="camark" class="form-label">ca note</label>
                <input type="text" class="form-control" name="camark" id="camark">
            </div>
            <div class="mb-3">
                <label for="snmark" class="form-label">sn note</label>
                <input type="text" class="form-control" name="snmark" id="snmark">
            </div>
            <div class="mb-3">
                <label for="tpmark" class="form-label">tp note</label>
                <input type="text" class="form-control" name="tpmark" id="tpmark">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      </body>
    </html>


