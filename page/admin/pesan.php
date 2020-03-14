<!-- Page Content -->
  <div class="container">
<?php
  if($_SESSION["level"]=='Petugas' || $_SESSION["level"]=='Administrator') { ?>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">


<div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Message</div>
            <div class="card-body">
              <div class="table-responsive">
<table class="table table-striped">
  <br>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Pengirim</th>
      <th scope="col">Telp</th>
      <th scope="col">Tgl</th>
      <th scope="col">Perihal</th>
      <th scope="col">Masalah</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <?php 
    $koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');

      if(mysqli_connect_error()){
        echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
      }
    $id_hubungi = 1;

    $sql = $koneksi->query("select * from hubungi");

    while ($data = $sql->fetch_assoc()) {
  ?>
  <tbody>
  <tr>
      <td><?php echo $id_hubungi++; ?></td>
      <td><?php echo $data['nama_lengkap']; ?></td>
      <td><?php echo $data['telp'] ?></td>
      <td><?php echo $data['tgl'] ?></td>
      <td><?php echo $data['perihal'] ?></td>
      <td><?php echo $data['masalah'] ?></td>
      <td>
          <a onclick="return confirm('Anda yakin akan menghapusnya?')" href="?page=pesan&perintah=delpesan&id_hubungi=<?php echo $data['id_hubungi'];?>" class="btn btn-danger">Hapus</a>
      </td>
  </tr>
  <?php } ?>
  </tbody>
</table>
<?php if (mysqli_num_rows($sql) <= 0) {
    include 'error505admin.php';
  }
  ?>
</div>
</div>
</div>
</div>
</div>
<?php }
if($_SESSION["level"]=='Masyarakat' || empty($_SESSION))
  {
  include 'error404admin.php';
  }
  ?>
</div>
