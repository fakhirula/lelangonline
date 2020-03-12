<!-- Page Content -->
  <div class="container">

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
  <tbody>
    <?php 
                $koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');

                  if(mysqli_connect_error()){
                    echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
                  }
                $id_contact = 1;

                $sql = $koneksi->query("select * from hubungi");

                while ($data = $sql->fetch_assoc()) {
             ?>

            <tr>
                <td><?php echo $id_contact++; ?></td>
                <td><?php echo $data['nama_lengkap']; ?></td>
                <td><?php echo $data['telp'] ?></td>
                <td><?php echo $data['tgl'] ?></td>
                <td><?php echo $data['perihal'] ?></td>
                <td><?php echo $data['masalah'] ?></td>
                <td>
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
</div>
