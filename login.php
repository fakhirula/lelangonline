<div class="container">
    <div class="row">
      <div class="col-md-8 mb-5">
        <br>
        <h2>Register</h2><h4>Masyarakat</h4>
        <hr>
<div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-body">
          <div class="login">
			<form method="POST">
			  <div class="form-row">
			    <div class="form-group col-md-12">
			      <label>Nama Lengkap</label>
			      <input type="text" class="form-control" maxlength="25" name="1nama_lengkap" placeholder="Nama Lengkap" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label>Username</label>
			      <input type="text" class="form-control" maxlength="25" name="1username" placeholder="Username" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label>Password</label>
			      <input type="password" class="form-control" maxlength="25" name="1password" placeholder="Password" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label>Telp</label>
			    <input type="number" class="form-control" name="1telp" maxlength="13" placeholder="(62) 123456789" required>
			  </div>
			  <div class="col-auto my-1">
          <div class="custom-control custom-checkbox mr-sm-2">
            <input type="checkbox" class="custom-control-input" id="regis" required="">
			      <label class="custom-control-label" for="regis">Saya menyetujui syarat dan ketentuan yang berlaku*</label>
			    </div>
			    <div class="custom-control custom-checkbox mr-sm-2">
            <input type="checkbox" class="custom-control-input" id="customControlAutosizing" disabled="" checked="">
            <label class="custom-control-label" for="customControlAutosizing">Register akun sebagai Masyarakat*</label>
          </div>
			  </div>
			  <input type="submit" name="reg_masyarakat" value="Register" class="btn btn-primary">
			</form>
			
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-4 mb-5">
	<br>
  <h2>Login</h2><h4>Masyarakat</h4>
  <hr>
  <div class="card-body">
      <div class="login">
        <form level="form" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <label for="username">Username</label>
              <input type="text" id="username" class="form-control" name="username" maxlength="25" placeholder="Username" required="required" autofocus="autofocus" required>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <label for="password">Password</label>
              <input type="password" id="password" class="form-control" name="password" maxlength="25" placeholder="Password" required>
            </div>
          </div>
          <div class="col-auto my-1">
            <div class="custom-control custom-checkbox mr-sm-2">
              <input type="checkbox" class="custom-control-input" id="login" required="">
              <label class="custom-control-label" for="login">Login sebagai Masyarakat*</label>
          </div>
          </div>
          <input type="submit" name="loginadmin" class="btn btn-primary btn-block" value="Log me in" />
        </form>
        </div>
      </div>
  <hr>
</div>
</div>

<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "dblelang";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()){
  echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}



//Reg Masyarakat  
  $nama_lengkap = $_POST['1nama_lengkap'];
  $username = $_POST['1username'];
  $password = $_POST['1password'];
  $telp = $_POST['1telp'];

  $simpan = $_POST['reg_masyarakat'];

  if ($simpan) {  
    $sql = $koneksi->query("insert into tb_masyarakat (nama_lengkap, username, password, telp) values('$nama_lengkap', '$username', '$password', '$telp')");
    
    if ($sql){
      ?>
        <script type="text/javascript">
          alert("Register Masyarakat data is saved");
          window.location.href="?page=masyarakat";
        </script>

      <?php
    }
}
 ?>