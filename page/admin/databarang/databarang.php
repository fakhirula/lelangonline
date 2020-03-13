<!-- Page Content -->
  <div class="container">
<?php
  if($_SESSION["level"]=='Petugas' || $_SESSION["level"]=='Administrator') { ?>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">


<div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Barang</div>
            <div class="card-body">
              <a href="?page=admin&perintah=tambah" class="btn btn-outline-success">Tambah</a>
              <a href="?page=admin&perintah=print" target="_blank" class="btn btn-outline-warning" style="float: right;">Print</a>
              <div class="table-responsive">
<table class="table table-striped">
  <br>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Harga Awal</th>
      <th scope="col">Deskripsi Barang</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
                $koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');

                  if(mysqli_connect_error()){
                    echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
                  }
                $id_barang = 1;

                $sql = $koneksi->query("select * from tb_barang");

                while ($data = $sql->fetch_assoc()) {
                

             ?>

            <tr>
                <td><?php echo $id_barang++; ?></td>
                <td><?php echo $data['nama_barang']; ?></td>
                <td><?php echo $data['tgl'] ?></td>
                <td><?php echo $data['harga_awal'] ?></td>
                <td><?php echo $data['deskripsi_barang'] ?></td>
                <td>
                    <a href="?page=admin&perintah=edit&id_barang=<?php echo $data['id_barang'];?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Anda yakin akan menghapusnya?')" href="?page=admin&perintah=delete&id_barang=<?php echo $data['id_barang'];?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>



        <?php } ?>
  </tbody>
</table>
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
