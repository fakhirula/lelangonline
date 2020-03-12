<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');
$id_barang   = $_GET['id_barang'];

$sql = $koneksi->query("select * from tb_lelang where id_barang='$id_barang'");
$data = mysqli_fetch_assoc($sql);
?>
<!-- Page Content -->
<div class="container">
<div class="row">
  <div class="col-lg-3">
    <h1 class="my-4">Detail Barang</h1>
    <div class="list-group">
      <a href="?page=lelang" class="list-group-item active">Kembali</a>
    </div>
    <br>
    <hr>
    <?php
    if(isset($_SESSION["username"]))  
    {
    ?>
    <form method="post" action="?page=lelang&perintah=penawaran" enctype="multipart/form-data">
      <div class="form-group">
        <label for="">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $row_akun['nama_lengkap'];?>" readonly>
      </div>
      <div class="form-group">
      <label for="">Penawaran Harga</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">Rp.</div>
        </div>
        <input type="number" name="penawaran_harga" class="form-control"  placeholder="Harga awal">
      </div>
      </div>
      <input type="submit" name="penawaran" value="Ajukan!" class="btn btn-primary">
    </form>
    <hr>
    <?php } ?>
  </div>

      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
<?php
$sql = $koneksi->query("select * from tb_lelang where id_barang='$id_barang'");
while ($data = $sql->fetch_assoc()) {
      $id_barang = $data['id_barang'];
      $id_lelang = $data['id_lelang'];
      $query_barang = mysqli_query($koneksi, "Select * From tb_barang where id_barang='$id_barang' ");
      $databarang = mysqli_fetch_assoc($query_barang);
      $harga_rupiah = "Rp. " . number_format($databarang['harga_awal'],2,',','.');
  
?>
        <div class="card mt-4">
          <center>
          <img class="card-img-top img-fluid" style=" height: 400px;" src="img/<?= $data['nama_file'] ?>" alt=""></center>
          <div class="card-body">
            <h3 class="card-title"><?= $databarang['nama_barang'] ?></h3>
            <hr>
            <h4><?php echo $harga_rupiah ?></h4>
            <br>
<table class="table table-striped">
  <tbody>
    <tr>
      <td>No Lelang</td>
      <td><?= $data['id_lelang'] ?></td>
    </tr>
    <tr>
      <td>Deskripsi Barang</td>
      <td><?= $databarang['deskripsi_barang'] ?></td>
    </tr>
    <tr>
      <td>Tgl Lelang</td>
      <td><?= $data['tgl_lelang'] ?></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><?= $data['status'] ?></td>
    </tr>
  </tbody>
</table>
          </div>
        </div>
<?php } ?>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <?php 
              $koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');

              $querykamu = mysqli_query($koneksi, "Select * From history_lelang where id_lelang='$id_lelang'");
              while ($datahistory = mysqli_fetch_array($querykamu))
              {
                $id_lelang = $datahistory['id_lelang'];
                $id_user = $datahistory['id_user'];
                $data_akun = mysqli_query($koneksi, "Select * From tb_masyarakat Where id_user='$id_user'");
                $dataakun = mysqli_fetch_assoc($data_akun);
                $penawaran = "Rp. " . number_format($datahistory['penawaran_harga'],2,',','.');
          ?>
          <div class="card-header">
            Penawaran Produk
          </div>
          <div class="card-body">
            <label><?php echo $dataakun['nama_lengkap']; ?> --> </label>
            <label><?php echo $penawaran ?></label><br>
            <small class="text-muted">no penawaran: <?php echo $datahistory['id_history']; ?></small>
            <hr>
          </div>
        <?php } ?>
        </div>
        <!-- /.card -->

      </div>

    </div>

  </div>
  <!-- /.container -->