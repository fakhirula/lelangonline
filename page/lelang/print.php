<!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
<div class="card-header">
  <i class="fas fa-table"></i>
  Data Table Persetujuan Lelang</div>
<div class="card-body">
  <div class="table-responsive">
<table class="table table-striped">
  <br>
  <thead>
    <tr>
      <th scope="col">ID Lelang</th>
      <th scope="col">ID Barang</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Harga Akhir</th>
      <th scope="col">Images</th>
      <th scope="col">ID User</th>
      <th scope="col">ID Petugas</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php 
                $koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');

                  if(mysqli_connect_error()){
                    echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
                  }

                $sql = $koneksi->query("select * from tb_lelang");

                while ($data = $sql->fetch_assoc()) {
                

             ?>

            <tr>
                <td><?php echo $data['id_lelang']; ?></td>
                <td><?php echo $data['id_barang']; ?></td>
                <td><?php echo $data['tgl_lelang'] ?></td>
                <td><?php echo $data['harga_akhir'] ?></td>
                <td><?php echo $data['nama_file'] ?></td>
                <td><?php echo $data['id_user'] ?></td>
                <td><?php echo $data['id_petugas'] ?></td>
                <td><?php echo $data['status'] ?></td>
            </tr>



        <?php } ?>
  </tbody>
</table>
<script>
		window.print();
	</script>
</div>
</div>
</div>
</div>
</div>
</div>
