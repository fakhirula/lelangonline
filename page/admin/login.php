<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
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
      <input type="text" class="form-control" maxlength="25" name ="1nama_petugas" placeholder="Nama Lengkap" required>
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
  <div class="form-row">
    <div class="form-group col-md-12">
      <label>Level</label>
      <input type="text" class="form-control-plaintext" name="1id_level" value="1" readonly>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required="required">
      <a href="?page=about" class="form-check-label" for="gridCheck">
        Saya menyetujui syarat dan ketentuan yang berlaku*
      </a>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" checked="checked" disabled="disabled">
      <label class="form-check-label" for="gridCheck">
        Register akun sebagai Administrator.
      </label>
    </div>
  </div>
  <input type="submit" name="reg_admin" value="Register" class="btn btn-primary">
  <a href="page/admin/index.php">asdasda</a>
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
              <input type="text" id="username" class="form-control" name="username" maxlength="25" placeholder="Username" required="required" autofocus="autofocus" required>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <label for="password">Password</label>
              <input type="password" id="password" class="form-control" name="password" maxlength="25" placeholder="Password" required>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck" required="required">
              <label class="form-check-label" for="gridCheck">
                Cek untuk login sebagai Administrator.
              </label>
            </div>
          </div>
          <input type="submit" name="loginadmin" class="btn btn-primary btn-block" value="Log me in" />
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
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck" required="required">
              <label class="form-check-label" for="gridCheck">
                Cek untuk login sebagai Petugas.
              </label>
            </div>
          </div>
          <input type="submit" name="login" class="btn btn-primary btn-block" value="Log me in" />
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
<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "dblelang";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()){
  echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}

//Reg Admin  
  $nama_petugas1 = $_POST['1nama_petugas'];
  $username1 = $_POST['1username'];
  $password1 = $_POST['1password'];
  $id_level = $_POST['id_level'];

  $simpan1 = $_POST['reg_admin'];

  if ($simpan1) {  
    $sql = $koneksi->query("insert into tb_petugas (nama_petugas, username, password, id_level) values('$nama_petugas1', '$username', '$password1', '$id_level')");
    
    if ($sql){
      ?>
        <script type="text/javascript">
          alert("Register Administrator data is saved");
          window.location.href="?page=register";
        </script>

      <?php
    }
}
 ?>


<?php
//Reg Masyarakat

  $nama_lengkap = $_POST['2nama_lengkap'];
  $username = $_POST['2username'];
  $password = $_POST['2password'];
  $telp = $_POST['2telp'];

  $simpan = $_POST['reg_masyarakat'];

  if ($simpan) {  
    $sql = $koneksi->query("insert into tb_masyarakat (nama_lengkap, username, password, telp) values('$nama_lengkap', '$username', '$password', '$telp')");
    
    if ($sql){
      ?>
        <script type="text/javascript">
          alert("Register Masyarakat data is saved");
          window.location.href="?page=about";
        </script>

      <?php
    }
}
 ?>



 <?php
 //Login Admin
if(isset($_POST['loginadmin'])){

    //include("koneksi.php");
    
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    
    $query = mysqli_query($koneksi, "SELECT * FROM tb_petugas WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query) == 0){
        echo '<div class="alert alert-danger">Username atau Password salah.</div>';
    }else{
        $row = mysqli_fetch_assoc($query);
            header("Location: index.php");
        
    }
}
?>



 