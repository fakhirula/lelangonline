<div class="container">

<div class="row">
<div class="col-lg-12">
<div class="card">


<div class="card-header">
      <i class="fas fa-table"></i>
      Data Table Barang</div>
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
      <tbody>
        <?php 
                while ($data = $sql->fetch_assoc()) {
            ?>

            <tr>
                <td><?php echo $id_barang++; ?></td>
                <td><?php echo $data['nama_barang']; ?></td>
                <td><?php echo $data['tgl'] ?></td>
                <td><?php echo $data['harga_awal'] ?></td>
                <td><?php echo $data['deskripsi_barang'] ?></td>
                <td>
                  <?php 
                      $id = $data['id_barang'];
                      $queryCekLelang = mysqli_query($koneksi, "Select * From tb_lelang Where id_barang='$id'");
                      $dilelang = false;
                      if (mysqli_num_rows($queryCekLelang) > 0)
                      {
                        $datalelang = mysqli_fetch_assoc($queryCekLelang);
                        if ($datalelang['status'] == 'dibuka')
                        {
                          $dilelang = true;
                        }
                      }
                      if ($dilelang)
                      {
                   ?>
                    <a onclick="return confirm('Anda yakin akan menghapusnya?')" href="?page=admin&perintah=tutuplelang&id_barang=<?php echo $data['id_barang'];?>" class="btn btn-warning">Ditutup</a>
                  <?php }else{ ?>
                    <a href="?page=admin&perintah=bukalelang&id_barang=<?php echo $data['id_barang'];?>" class="btn btn-success">Dibuka</a>
                  <?php } ?>
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
