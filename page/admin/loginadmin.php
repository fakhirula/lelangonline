<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<?php
session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:index.php");  
 }  
$koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');


//Reg Masyarakat
if(isset($_POST["reg_admin"]))  
 {   
  $nama_petugas = mysqli_real_escape_string($koneksi, $_POST['nama_petugas']);
  $username = mysqli_real_escape_string($koneksi, $_POST["username"]);
  $password = mysqli_real_escape_string($koneksi, $_POST["password"]);
  $id_level = mysqli_real_escape_string($koneksi, $_POST['id_level']);

  $simpan = $_POST['reg_admin'];

  if ($simpan) {  
    $sql = $koneksi->query("insert into tb_petugas (nama_petugas, username, password, id_level) values('$nama_petugas', '$username', '$password', '$id_level')");
    
    if ($sql){
      ?>
        <script type="text/javascript">
          alert("Register Administrator data is saved");
          window.location.href="?page=login";
        </script>

      <?php
    }
  }
}
 if(isset($_POST["log_admin"]))  
 {
           $username = mysqli_real_escape_string($koneksi, $_POST["username"]);  
           $password = mysqli_real_escape_string($koneksi, $_POST["password"]); 
           $query = "SELECT * FROM tb_petugas WHERE username = '$username' AND password = '$password'";  
           $result = mysqli_query($koneksi, $query);  
           if(mysqli_num_rows($result) > 0)  
           {
             $row_akun = mysqli_fetch_array($query);

                $_SESSION['username'] = $username;
                $_SESSION['level'] = 'Administrator';  
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
        <h2>Register</h2>
        <hr>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Administrator</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-body">
          <div class="login">
<form method="post">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label>Nama Petugas</label>
      <input type="text" class="form-control" maxlength="25" name ="nama_petugas" placeholder="Nama Lengkap" required>
    </div>
    <div class="form-group col-md-6">
      <label>Username</label>
      <input type="text" class="form-control" maxlength="25" name="username" placeholder="Username" required>
    </div>
    <div class="form-group col-md-6">
      <label>Password</label>
      <input type="password" class="form-control" maxlength="25" minlength="8" name="password" placeholder="Password" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label>Level</label>
      <input type="text" class="form-control-plaintext" name="id_level" value="1" readonly>
    </div>
  </div>
  <div class="col-auto my-1">
    <div class="custom-control custom-checkbox mr-sm-2">
      <input type="checkbox" class="custom-control-input" id="regis" required="">
      <label class="custom-control-label" for="regis">Saya menyetujui syarat dan ketentuan yang berlaku*</label>
    </div>
    <div class="custom-control custom-checkbox mr-sm-2">
      <input type="checkbox" class="custom-control-input" id="customControlAutosizing" disabled="" checked="">
      <label class="custom-control-label" for="customControlAutosizing">Register akun sebagai Administrator*</label>
    </div>
  </div>
  <input type="submit" name="reg_admin" value="Register" class="btn btn-primary">
</form>
        </div>
      </div>
    </div>
  </div>
  </div>
  
</div>
</div>



<!--login-->
<div class="col-md-4 mb-5">
  <br>
  <h2>Login</h2>
  <hr>

  <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#log-admin" role="tab" aria-controls="nav-home" aria-selected="true">Administrator</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#log-petugas" role="tab" aria-controls="nav-profile" aria-selected="false">Petugas</a>
  </div>
</nav>

  <!-- login admin -->
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="log-admin" role="tabpanel" aria-labelledby="nav-home-tab">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-body">
          <div class="login">
        <form level="form" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" maxlength="25" placeholder="Username" required="required" autofocus="autofocus" required>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
          </div>
          <div class="col-auto my-1">
            <div class="custom-control custom-checkbox mr-sm-2">
              <input type="checkbox" class="custom-control-input" id="login" required="">
              <label class="custom-control-label" for="login">Login sebagai Administrator*</label>
          </div>
          </div>
          <input type="submit" name="log_admin" class="btn btn-primary btn-block" value="Log me in" />
        </form>
        </div>
      </div>
    </div>
  </div>
  </div>





  <!-- login petugas -->
  <div class="tab-pane fade" id="log-petugas" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-body">
          <div class="login">
        <form level="form" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <label for="username">Username</label>
              <input type="text" id="username" class="form-control" name="username" maxlength="25" placeholder="Username petugas" required="required" autofocus="autofocus" required>
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
              <label class="custom-control-label" for="login">Login sebagai Petugas*</label>
          </div>
          </div>
          <input type="submit" name="log_petugas" class="btn btn-primary btn-block" value="Log me in" />
        </form>
        </div>
      </div>
    </div>
  </div>
  </div>
    </div>
</div>
  
</div>
</div>