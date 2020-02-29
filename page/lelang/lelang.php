
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
    $querykamu = mysqli_query($koneksi, 'SELECT * FROM tb_barang');
    $id_barang   = $_GET['id_barang'];
    foreach( $querykamu as $row ) :
?>
      <div class="col-md-4 mb-5">
        <div class="card h-100 shadow">
          <img class="card-img-top" src="http://placehold.it/300x200" alt="">
          <div class="card-body">
            <h4 class="card-title"><?= $row['nama_barang'] ?></h4>
            <p class="card-text lead">Rp.<?= $row['harga_awal'] ?></p>
          </div>
          <div class="card-footer">
            <a href="?page=lelang&perintah=detailbarang&id_barang=<?php echo $row['id_barang'];?>" class="btn btn-secondary">Detail!</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
</div>