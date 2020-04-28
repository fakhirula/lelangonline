
<div class="container">
  <div class="jumbotron shadow rounded" style="background: url(img/jumbotron.jpg);">
  <div class="container">
    <h1 class="display-4">Auction tab.</h1>
    <p class="lead">Silakan hubungi admin untuk keterangan lebih lanjut.</p>
    <hr>
  </div>
</div>
<br>
<div class="row">
  <?php 
include ('koneksi.php');


$username = $_SESSION['username'];
$queryUser = mysqli_query($koneksi, "Select * From tb_masyarakat Where username='$username'");
$dataUser = mysqli_fetch_assoc($queryUser);
$id_user = $dataUser['id_user'];


$querykamu = mysqli_query($koneksi, "Select * From tb_lelang Where status='ditutup' && id_user='$id_user'");
while ($data = mysqli_fetch_array($querykamu))
{
  $id_barang = $data['id_barang'];
  $id_lelang = $data['id_lelang'];
  $id_user = $data['id_user'];
  $query_barang = mysqli_query($koneksi, "Select * From tb_barang Where id_barang='$id_barang'");
  $datas = mysqli_fetch_assoc($query_barang);
  $harga_rupiah = "Rp. " . number_format($data['harga_akhir'],2,',','.');

  $query_akun = mysqli_query($koneksi, "Select * From tb_masyarakat Where id_user='$id_user'");
  $data_akun = mysqli_fetch_assoc($query_akun);
?>
      <div class="col-md-4 mb-5">
        <div class="card h-100 shadow">
          <img class="card-img-top"  height="300" src="img/<?= $data['nama_file'] ?>" alt="">
          <div class="card-body">
            <h4 class="card-title"><?= $datas['nama_barang']; ?></h4>
            <p class="card-text lead"><?php echo $harga_rupiah ?></p>
          </div>
          <div class="card-footer">
            <p class="card-text lead">Pemenang: <?= $data_akun['nama_lengkap']; ?></p>
          </div>
        </div>
      </div>
      <?php }
      if (mysqli_num_rows($querykamu) <= 0) {
        echo '<center><br><h3 style="color:red; margin-left: 300px;">Sorry, no items have been auctioned yet.</h3></center><br>';
      }
      ?>
    </div>
</div>