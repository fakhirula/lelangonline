<!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h1 class="my-4">Selamat Datang</h1>
        <div class="list-group">
          <a href="?page=admin" class="list-group-item active">Persetujuan Data</a>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="card mt-4">


<div class="card-header">
    <i class="fas fa-table"></i>
    Data Table Persetujuan</div>
  <div class="card-body">
    <a href="" class="btn btn-outline-warning" style="float: right;">Print</a>
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
  <!--
  <tbody>
    
    <?php 
                
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
  -->
</table>
</div>
</div>
</div>
</div>

</div>
</div>
