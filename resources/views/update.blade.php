<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Buku</title>
  </head>
  <body>
    <center><h1>Tambah Buku</h1></center>
    <form action="/update/{{ $bukus->id }}" method="POST">
        @csrf
        <div class="container">
        <div class="mb-3">
          <label class="form-label">Judul</label>
          <input type="text" class="form-control" value="{{ $bukus->judul }}" name="judul">
        </div>
        <div class="mb-3">
          <label class="form-label">Author</label>
          <input type="text" class="form-control" value="{{ $bukus->author }}" name="author">
        </div>
        <div class="mb-3">
            <label class="form-label">Synopsis</label>
            <input type="text" class="form-control" value="{{ $bukus->synopsis }}" name="synopsis">
        </div>
        <div class="mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" class="form-control" value="{{ $bukus->penerbit }}" name="penerbit">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
      </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
