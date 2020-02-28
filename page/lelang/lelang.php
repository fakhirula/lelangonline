
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
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tawar">Tawar!</button>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#staticBackdrop">Details</button>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
</div>

<div class="modal fade" id="tawar" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Berikan Harga Terbaikmu!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post">
        <div class="form-group">
          <label for="">ID Barang</label>
          <input type="text" class="form-control" name="id_barang" value="<?= $row['nama_barang'] ?>" readonly>
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
      </form>
      </div>
      <div class="modal-footer">
        <input type="submit" name="save" value="Ajukan" style="float: left;" class="btn btn-success">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <img class="card-img-top" src="http://placehold.it/300x200" style="width: 465px;" alt="">
          <div class="card-body">
            <h4 class="card-title"><?= $row['nama_barang'] ?></h4>
            <p class="card-text lead">Rp.<?= $row['harga_awal'] ?></p>
            <p class="card-text"><em>" <?= $row['deskripsi_barang'] ?> "</em></p>
          </div>
          <div class="card-footer">
            <p class="card-text">Deskripsi: <?= $row['deskripsi_barang'] ?></p>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>