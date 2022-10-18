<?php
  include 'koneksi.php';

  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_mhs
            WHERE id_mhs = $id";
    $result = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($result);

    $sql1 = "SELECT * FROM tbl_prodi";
    $result1 = mysqli_query($koneksi, $sql1);
  }
?>

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
      <h2 class="my-3">UPDATE DATA MAHASISWA FAKULTAS TEKNIK</h2>
      <form action="index.php" method="post">
          <div class="mb-3">
            <input type="hidden" id="disabledTextInput" class="form-control" value="<?php echo $id?>" name="dataId">
          </div>
          <div class="mb-3">
            <label for="inputName" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="inputName" name="namaUpdate" aria-describedby="emailHelp" required value="<?php echo $data['nama_mhs'];?>">
          </div>
          <div class="mb-3">
            <label for="inputAddress" class="form-label">Alamat Mahasiswa</label>
            <input type="text" class="form-control" id="inputAddress" name="addressUpdate" required value=<?php echo $data['alamat_mhs'];?>>
          </div>
          <div class="mb-3">
            <label for="prodi" class="form-label">Program Studi</label>
          <select class="form-select" aria-label="Default select example" name="prodiUpdate">
            <?php while ($data1 = mysqli_fetch_assoc($result1)){ ?>
              <?php if($data1['id_prdi'] == $data['id_prodi']) {?>
                <option value="<?php echo $data1['id_prdi']?>" selected><?php echo $data1['nama_prodi']?></option>
              <?php } else {?>
                <option value="<?php echo $data1['id_prdi']?>"><?php echo $data1['nama_prodi']?></option>
              <?php } ?>
            <?php } ?>
          </select>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>