<!-- Page Content -->
<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');


//Reg Masyarakat
if(isset($_POST["savedata"]))  
 {   
  $nama_barang = $_POST['nama_barang'];
  $tgl = $_POST["tgl"];
  $harga_awal = $_POST["harga_awal"];
  $deskripsi_barang = $_POST['deskripsi_barang'];

  $simpan = $_POST['savedata'];

  if ($simpan) {  
    $sql = $koneksi->query("insert into tb_barang (nama_barang, tgl, harga_awal, deskripsi_barang) values('$nama_barang', '$tgl', '$harga_awal', '$deskripsi_barang')");
    
    if ($sql){
      ?>
        <script type="text/javascript">
          alert("Data Barang is saved");
          window.location.href="?page=admin&perintah=databarang";
        </script>

      <?php
    }
  }
}
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
<form method="post">
  <div class="form-group">
    <label for="">Nama Barang</label>
    <input type="text" class="form-control" name="nama_barang" placeholder="Nama barang...">
  </div>
  <div class="form-group">
    <label for="">Tanggal</label>
    <input type="date" name="tgl" class="form-control">
  </div>
  <div class="form-group">
  <label for="">Harga Awal</label>
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text">Rp.</div>
    </div>
    <input type="number" name="harga_awal" class="form-control"  placeholder="Harga awal...">
  </div>
  </div>
  <div class="form-group">
    <label for="">Deskripsi Barang</label>
    <textarea class="form-control" name="deskripsi_barang" placeholder="Deskripsi barang..." rows="3"></textarea>
  </div>
  <input type="submit" name="savedata" value="Save" class="btn btn-primary">
</form>
              
</div>
</div>
</div>
</div>
</div>
