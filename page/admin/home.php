   <div class="container">
    <?php
if(isset($_SESSION["username"]))  
 { 
 ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Hi <?php echo $row_akun['nama_petugas']; ?>!</strong> Kamu berhasil login sebagai <?php echo $_SESSION['level']; ?>.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>
<div class="jumbotron card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
  <div class="container">
    <h1 class="display-4">Sistem Lelang Online</h1>
    <hr>
    <?php 
    if(!isset($_SESSION['username'])) { ?>
    <p class="">Don't have an account? or already have an account?</p><a href="?page=login" class="btn btn-primary">Klik!</a> or return to the Masyarakat Page <a href="../../index.php" class="btn btn-primary">Klik!</a></p>
    <?php } ?>
  </div>
</div>
    

    <hr>
    <div class="row">
<?php 
    $koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');

    if(mysqli_connect_error()){
      echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
    }

    $querykamu = mysqli_query($koneksi, "Select * From tb_lelang Where status='dibuka'");
    while ($data = mysqli_fetch_array($querykamu))
    {
      $id_barang = $data['id_barang'];
      $query_barang = mysqli_query($koneksi, "Select * From tb_barang Where id_barang='$id_barang'");
      $data_barang = mysqli_fetch_assoc($query_barang);
      $harga_rupiah = "Rp. " . number_format($data_barang['harga_awal'],2,',','.');
?>
      <div class="col-md-4 mb-5">
        <div class="card h-100 shadow">
          <img class="card-img-top"  height="300" src="../../img/<?= $data_barang['nama_file'] ?>" alt="">
          <div class="card-body">
            <h4 class="card-title"><?= $data_barang['nama_barang'] ?></h4>
            <p class="card-text lead"><?php echo $harga_rupiah ?></p>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>

  </div>
  <!-- /.container -->