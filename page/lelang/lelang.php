
<div class="container">
  <div class="jumbotron shadow rounded" style="background: url(img/jumbotron.jpg);">
  <div class="container">
    <h1 class="display-4">Tab Barang Lelang.</h1>
    <p class="lead">Ini adalah halaman barang lelang.</p>
    <hr>
  </div>
</div> 
<br>
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
      $id_lelang = $data['id_lelang'];
      $query_barang = mysqli_query($koneksi, "Select * From tb_barang Where id_barang='$id_barang'");
      $data = mysqli_fetch_assoc($query_barang);
      $harga_rupiah = "Rp. " . number_format($data['harga_awal'],2,',','.');
?>
      <div class="col-md-4 mb-5">
        <div class="card h-100 shadow">
          <img class="card-img-top"  height="300" src="img/<?= $data['nama_file'] ?>" alt="">
          <div class="card-body">
            <h4 class="card-title"><?= $data['nama_barang']; ?></h4>
            <p class="card-text lead"><?php echo $harga_rupiah ?></p>
          </div>
          <div class="card-footer">
            <a href="?page=lelang&perintah=detailbarang&id_barang=<?php echo $data['id_barang'];?>" class="btn btn-secondary">Detail!</a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
</div>