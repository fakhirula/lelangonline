<?php
include ('koneksi.php');
$id_lelang = $_GET['id_lelang'];
$id_barang = $_GET["id_barang"];
$id_user = $_GET['id_user'];

$minimal_penawaran = 0;
$queryZ = $koneksi->query("Select harga_akhir From tb_lelang Where id_lelang='$id_lelang'");
$dataZ = mysqli_fetch_array($queryZ);
if($dataZ['harga_akhir'] > 0)
{
  $minimal_penawaran = $dataZ['harga_akhir'];
}
else
{
  $queryZ2 = $koneksi->query("Select harga_awal From tb_barang Where id_barang='$id_barang'");
  $dataZ2 = mysqli_fetch_array($queryZ2);
  $minimal_penawaran = $dataZ2['harga_awal'];
}

if(isset($_POST["ajukan"]))  
 {  
  $id_lelang = $_POST['id_lelang'];
  $id_barang = $_POST["id_barang"];
  $id_user = $_POST['id_user'];
  $penawaran_harga = $_POST['penawaran_harga'];

  $simpan = $_POST['ajukan'];

  if ($simpan) {  
    $sqlh = $koneksi->query("insert into history_lelang (id_lelang, id_barang, id_user, penawaran_harga) values('$id_lelang', '$id_barang', '$id_user', '$penawaran_harga')");
    
    if ($sqlh){
      ?>
        <script type="text/javascript">
          alert("Data Barang is updated");
          window.location.href="?page=lelang";
        </script>

      <?php
    }
  }
}
?>
<!-- Page Content -->
<div class="container">
<?php
$sql = $koneksi->query("SELECT * from tb_lelang where id_barang='$id_barang' && status='dibuka'");
while ($data = $sql->fetch_assoc()) {
?>
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
      <input type="text" readonly style="display: none;" name="id_lelang" value="<?php echo $_GET['id_lelang']; ?>">
      <input type="text" readonly style="display: none;" name="id_barang" value="<?php if(isset($_GET['id_barang'])) { echo $_GET['id_barang']; } ?>">
      <div class="form-group">
        <label for="">ID User</label>
        <input type="text" class="form-control" name="id_user" value="<?php echo $row_akun['id_user'];?>" readonly>
      </div>
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
        <input type="number" name="penawaran_harga" min="<?php echo $minimal_penawaran; ?>" class="form-control"  placeholder="Harga awal">
      </div>
      </div>
      <input type="submit" name="ajukan" value="Ajukan!" class="btn btn-primary">
    </form>
    <hr>
    <?php } ?>
  </div>


<div class="col-lg-9">
  <?php
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
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Penawaran Produk
          </div>
          <?php 
              $koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');

              $querykamu = mysqli_query($koneksi, "Select * From history_lelang where id_lelang='$id_lelang'Order By penawaran_harga Desc");
              while ($datahistory = mysqli_fetch_array($querykamu))
              {
                $id_lelang = $datahistory['id_lelang'];
                $id_user = $datahistory['id_user'];
                $data_akun = mysqli_query($koneksi, "Select * From tb_masyarakat Where id_user='$id_user'");
                $dataakun = mysqli_fetch_assoc($data_akun);
                $penawaran = "Rp. " . number_format($datahistory['penawaran_harga'],2,',','.');
          ?>
          <div class="card-body">
            <label><?php echo $dataakun['nama_lengkap']; ?> --> </label>
            <label><?php echo $penawaran ?></label><br>
            <small class="text-muted">no penawaran: <?php echo $datahistory['id_history']; ?></small>
          </div>
           
            <?php } if (mysqli_num_rows($querykamu) <= 0)
                    {
                    echo'<br><center><p>No price quote has been made yet.</p></center>';
                    } ?>
      <?php }
        if (mysqli_num_rows($sql) <= 0)
        {
        include 'error404.php';
        }
      ?>
        </div>
        

      </div>

    </div>

  </div>
  <!-- /.container -->