<!-- Page Content -->
<?php 
  $koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');

  $username = $_SESSION['username'];
  $query = mysqli_query($koneksi, "SELECT * FROM tb_petugas where username = '$username'");
  $row_akun = mysqli_fetch_array($query);
  
?>
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h1 class="my-4"></h1>
        <div class="list-group">
          <a href="#" class="list-group-item active">Info Akun</a>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="card mt-4">
          <div class="card-body">
            <h3 class="card-title">Info Akun</h3>
            <hr>
            <div class="login">
        <form>
  <div class="form-row">
    <div class="form-group col-md-2">
      <label>ID</label>
      <input type="text" class="form-control" value="<?php echo $row_akun['id_petugas'];?>" readonly>
    </div>
    <div class="form-group col-md-10">
      <label>Nama Lengkap</label>
      <input type="text" class="form-control" value="<?php echo $row_akun['nama_petugas'];?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label>Username</label>
      <input type="text" class="form-control" value="<?php echo $row_akun['username'];?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label>Password</label>
      <input type="text" class="form-control" value="** Keamanan pengguna **" readonly>
    </div>
  </div>
  <div class="form-group">
    <label>Level</label>
    <input type="text" class="form-control" value="<?php echo $_SESSION['level'];?>" readonly>
  </div>
</form>
        </div>
          </div>
        </div>

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->