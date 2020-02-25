
<div class="container">
  <!-- carousel -->
  <div class="shadow p-3 rounded">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="height: 300px;" src="img/800x400.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 300px;" src="img/800x400.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 300px;" src="img/800x400.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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
    foreach( $querykamu as $row ) :
?>
      <div class="col-md-4 mb-5">
        <div class="card h-100 border-primary shadow p-3 rounded">
          <img class="card-img-top" src="http://placehold.it/300x200" alt="">
          <div class="card-body">
            <h4 class="card-title"><?= $row['nama_barang'] ?></h4>
            <p class="card-text">Harga: Rp.<?= $row['harga_awal'] ?></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
</div>