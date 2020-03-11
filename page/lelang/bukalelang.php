<!-- Page Content -->
<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');
$id_barang   = $_GET['id_barang'];

if(isset($_POST["save"]))  
 {  
  $id_barang = $_POST['id_barang'];
  $tgl_lelang = date('Y-m-d');
  $id_petugas = $_POST["id_petugas"];
  $nama_file = $_POST['nama_file'];
  $status = 'dibuka';
  $sql = mysqli_query($koneksi, "Select * From tb_lelang Where id_barang='$id_barang'");
  $simpan = $_POST['save'];

  if ($simpan) {  
    if (mysqli_num_rows($sql) > 0)
    {
      $sql = "Update tb_lelang 
        Set status='$status', harga_akhir='$harga_akhir', id_user=NULL, tgl_lelang='$tgl_lelang', id_petugas='$id_petugas'
        Where id_barang='$id_barang'";

        echo $sql;
        if (mysqli_query($koneksi, $sql))
        {
          header('Location: index.php');
        }
    }else{
      $sql = $koneksi->query("insert into tb_lelang(id_barang, tgl_lelang, id_petugas, nama_file, status) values('$id_barang', '$tgl_lelang', '$id_petugas', '$nama_file', '$status')");
    }
  }
}
$sql = $koneksi->query("select * from tb_barang where id_barang='$id_barang'");
while ($data = $sql->fetch_assoc()) {
?>
<div class="container">
<div class="row">
  <div class="col-lg-3">
    <h1 class="my-4">Selamat Datang</h1>
    <div class="list-group">
      <a href="" class="list-group-item active">Tambah Data</a>
    </div>
  </div>
<div class="col-lg-9">
<div class="card mt-4">
<div class="card-header">
  <i class="fas fa-table"></i>
  Tambah Data Barang</div>
<div class="card-body">
<form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="">ID Barang</label>
    <input type="text" class="form-control" name="id_barang" value="<?php echo $data['id_barang'];?>" readonly>
  </div>
  <div class="form-group">
    <label for="">Image</label>
    <input name="nama_file" value="<?php echo $data['nama_file'];?>" class="form-control"readonly>
  </div>
  <div class="form-group">
    <label for="">ID Petugas</label>
    <input name="id_petugas" value="<?= $row_akun['id_petugas'];?>" class="form-control"readonly>
  </div>
  <?php } ?>
  <input type="submit" name="save" value="Save" class="btn btn-primary">
</form>
</div>
</div>
</div>
</div>
</div>
