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
      <th scope="col">#</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Harga Awal</th>
      <th scope="col">Images</th>
      <th scope="col">Deskripsi Barang</th>
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
                <td><?php echo $data['nama_file'] ?></td>
                <td><?php echo $data['deskripsi_barang'] ?></td>
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
