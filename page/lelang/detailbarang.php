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
    <form method="post">
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
        <input type="number" name="penawaran_harga" class="form-control"  placeholder="Harga awal...">
      </div>
      </div>
      <input type="submit" name="tawar" value="Tawar!" class="btn btn-primary">
    </form>
    <hr>
  </div>

      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
          <div class="card-body">
            <h3 class="card-title">Product Name</h3>
            <h4>$24.99</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Product Reviews
          </div>
          <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->