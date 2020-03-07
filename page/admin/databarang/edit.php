<!-- Page Content -->
<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');
$id_barang   = $_GET['id_barang'];

if(isset($_POST["edit"]))  
 {  
  $nama_barang = $_POST['nama_barang'];
  $harga_awal = $_POST["harga_awal"];
  $deskripsi_barang = $_POST['deskripsi_barang'];

  $simpan = $_POST['edit'];

  if ($simpan) {  
    $sql = $koneksi->query("update tb_barang set nama_barang='$nama_barang', harga_awal='$harga_awal', deskripsi_barang='$deskripsi_barang' where id_barang='$id_barang'");
    
    if ($sql){
      ?>
        <script type="text/javascript">
          alert("Data Barang is updated");
          window.location.href="?page=admin&perintah=databarang";
        </script>

      <?php
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
      <a href="?page=admin&perintah=databarang" class="list-group-item active">Kembali</a>
    </div>
  </div>
<div class="col-lg-9">
<div class="card mt-4">
<div class="card-header">
  <i class="fas fa-table"></i>
  Tambah Data Barang</div>
<div class="card-body">
<form method="post">
  <div class="form-group">
    <label for="">ID Barang</label>
    <input type="text" class="form-control" name="id_barang" value="<?php echo $data['id_barang'];?>" readonly>
  </div>
  <div class="form-group">
    <label for="">Nama Barang</label>
    <input type="text" class="form-control" name="nama_barang" value="<?php echo $data['nama_barang'];?>" placeholder="Nama barang...">
  </div>
  <div class="form-group">
  <label for="">Harga Awal</label>
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text">Rp.</div>
    </div>
    <input type="number" name="harga_awal" class="form-control" value="<?php echo $data['harga_awal'];?>">
  </div>
  </div>
  <div class="form-group">
    <label for="">Deskripsi Barang</label>
    <input type="text" name="deskripsi_barang" class="form-control" value="<?php echo $data['deskripsi_barang'];?>">
  </div>
  <?php } ?>
  <input type="submit" name="edit" value="Save" class="btn btn-primary">
</form>

</div>
</div>
</div>
</div>
</div>
