<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css" />

    <title>BLACKPINK API</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-5 bg-light py-5 px-5 shadow p-3 mb-5 bg-body rounded">
          <h1 class="text-center fw-bold">BLACKPINK API</h1>
          <p class="text-center">Get all information about BLACKPINK in JSON Format.</p>
          <div class="list-group">
            <a href="data/all.json" class="list-group-item list-group-item-danger">All Data</a>
            <a href="data/members.json" class="list-group-item list-group-item-danger">Members Data</a>
            <a href="data/discography.json" class="list-group-item list-group-item-danger">Discography Data</a>
            <div class="dropdown">
              <a class="dropdown-toggle list-group-item list-group-item-danger" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Sources</a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="https://www.google.com/">Google</a></li>
                <li><a class="dropdown-item" href="https://en.wikipedia.org/">Wikipedia</a></li>
                <li><a class="dropdown-item" href="https://kepoper.com/">Kepoper</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
