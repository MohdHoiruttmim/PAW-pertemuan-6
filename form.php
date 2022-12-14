<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3 col-md-6 py-5">
      <h2 class="my-3">TAMBAH DATA MAHASISWA FAKULTAS TEKNIK</h2>
      <form action="index.php" method="post">
          <div class="mb-3">
            <label for="inputName" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="inputName" name="nama" aria-describedby="emailHelp" required>
          </div>
          <div class="mb-3">
            <label for="inputAddress" class="form-label">Alamat Mahasiswa</label>
            <input type="text" class="form-control" id="inputAddress" name="address" required>
          </div>
          <div class="mb-3">
            <label for="prodi" class="form-label">Program Studi</label>
          <select class="form-select" aria-label="Default select example" name="prodi">
              <option value="1">T. Informatika</option>
              <option value="2">Sistem Informasi</option>
              <option value="3">Teknik Industri</option>
              <option value="4">Teknik Mesin</option>
              <option value="5">Teknik Elektronika</option>
          </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>