<?php
session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:index.php");  
 }  
$koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');


//Reg Masyarakat
if(isset($_POST["register"]))  
 {   
  $nama_lengkap = mysqli_real_escape_string($koneksi, $_POST['nama_lengkap']);
  $username = mysqli_real_escape_string($koneksi, $_POST["username"]);
  $password = mysqli_real_escape_string($koneksi, $_POST["password"]);
  $password = base64_encode($password);
  $telp = mysqli_real_escape_string($koneksi, $_POST['telp']);

  $simpan = $_POST['register'];

  if ($simpan) {  
    $sql = $koneksi->query("insert into tb_masyarakat (nama_lengkap, username, password, telp) values('$nama_lengkap', '$username', '$password', '$telp')");
    
    if ($sql){
      ?>
        <script type="text/javascript">
          alert("Register Masyarakat data is saved");
          window.location.href="?page=login";
        </script>

      <?php
    }
  }
}
 if(isset($_POST["login"]))  
 {
           $username = mysqli_real_escape_string($koneksi, $_POST["username"]);  
           $password = mysqli_real_escape_string($koneksi, $_POST["password"]); 
           $query = "SELECT * FROM tb_masyarakat WHERE username = '$username' AND password = '$password'";  
           $result = mysqli_query($koneksi, $query);  
           if(mysqli_num_rows($result) > 0)  
           {
                $_SESSION['username'] = $username;
                $_SESSION['level'] = 'Masyarakat';  
                header("location:index.php");  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }   
 }  
 ?>  
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
			      <input type="text" class="form-control" maxlength="25" name="nama_lengkap" placeholder="Nama Lengkap" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label>Username</label>
			      <input type="text" class="form-control" maxlength="25" name="username" placeholder="Username" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label>Password</label>
			      <input type="password" class="form-control" minlength="8" maxlength="25" name="password" placeholder="Password" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label>Telp</label>
			    <input type="number" class="form-control" name="telp" maxlength="13" placeholder="(62) 123456789" required>
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
			  <input type="submit" name="register" value="Register" class="btn btn-primary">
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
          <input type="submit" name="login" class="btn btn-primary btn-block" value="Log me in" />
        </form>
        </div>
      </div>
  <hr>
</div>
</div>
</div>

