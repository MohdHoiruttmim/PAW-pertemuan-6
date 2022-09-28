<?php
$koneksi=mysqli_connect("localhost","root","","paw_pert_5");

$sql="SELECT * FROM tbl_prodi p, tbl_mhs m
      WHERE p.id_prdi = m.id_prodi";
$hasil=mysqli_query($koneksi,$sql);

// menambahkan data ke tabel
if(isset($_POST['nama'])){
  $nama = $_POST['nama'];
  $address = $_POST['address'];
  $prodi = $_POST['prodi'];
  $insertSql = "INSERT INTO tbl_mhs (id_prodi, nama_mhs, alamat_mhs) 
                VALUES ($prodi, '$nama', '$address')";
  mysqli_query($koneksi, $insertSql);
  header("Refresh:0 url=index.php");
}

// menghapus data
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $deleteSql = "DELETE FROM tbl_mhs
                WHERE id_mhs = $id";
  mysqli_query($koneksi, $deleteSql);
  header("Refresh:0 url=index.php");
}

// mengupdate data
if(isset($_POST['namaUpdate'])){
  $dataId = $_POST['dataId'];
  $namaUpdate = $_POST['namaUpdate'];
  $addressUpdate = $_POST['addressUpdate'];
  $prodiUpdate = $_POST['prodiUpdate'];

  $updateSql = "UPDATE tbl_mhs
                SET nama_mhs='$namaUpdate', id_prodi='$prodiUpdate', alamat_mhs='$addressUpdate'
                WHERE id_mhs=$dataId";
  mysqli_query($koneksi, $updateSql);
  header("Refresh:0");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>DATA MAHASISWA FAKUTAS TEKNIK</h2>
  <a href="form.php">
    <button type="button" class="btn btn-sm btn-success">Tambah</button>
  </a>
  
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID MHS</th>
          <th>NAMA MHS</th>
          <th>PRODI</th>
          <th>ALAMAT</th>
          <th>ACTION</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($baris=mysqli_fetch_assoc($hasil))
          { 
        ?>
        <tr>
          <td><?php echo $baris['id_mhs'];?></td>
          <td><?php echo $baris['nama_mhs'];?></td>
          <td><?php echo $baris['nama_prodi'];?></td>
          <td><?php echo $baris['alamat_mhs'];?></td>
          <td>
            
            <?php
              $id = $baris['id_mhs'];
              echo "<a href='update.php?id=$id'>";
            ?>
              <button type="button" class="btn btn-sm btn-warning">Edit</button>
            </a>
            <?php 
              echo "<a href='index.php?id=$id'>"; 
            ?>
              <button type="button" class="btn btn-sm btn-danger">Delete</button>
            </a>
          </td>
        </tr>
        <?php }?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
