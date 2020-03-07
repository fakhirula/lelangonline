<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<?php
ob_start();
session_start();
include 'koneksi.php';
$koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');

if($_SESSION["level"]=='Masyarakat')  
 {  
      header("location:../../index.php");  
 } 
$username = $_SESSION['username'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_petugas where username = '$username'");
$row_akun = mysqli_fetch_array($query);
 
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lelang Indonesia - DPK</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="vendor/bootstrap/css/business-frontpage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Admin & Petugas</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li> 
          <?php 
          if(isset($_SESSION['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="?page=admin&perintah=databarang">Data Barang</a>
          </li>
          <?php
          if($_SESSION["level"]=='Petugas') { ?>
          <li class="nav-item">
            <a class="nav-link" href="?page=admin&perintah=persetujuandata">Persetujuan Data Lelang</a>
          </li>
          <?php } ?>
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" level="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-circle fa-fw"><?php echo $row_akun['nama_petugas'];?></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item"  href="?page=account">Info Akun</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item"  data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
          </li>
        <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
<br>
  <?php 
      $koneksi = include 'koneksi.php';
                        
      $page = $_GET['page'];
      $perintah = $_GET['perintah'];

      if ($page == "about") {
        if ($perintah == "") {
          include 'about.php';
        }
      }if ($page == "admin") {
        if ($perintah == "databarang") {
          include 'databarang/databarang.php';
        }elseif ($perintah == "delete") {
          include 'databarang/delete.php';
        }elseif ($perintah == "tambah") {
          include 'databarang/tambah.php';
        }elseif ($perintah == "edit") {
          include 'databarang/edit.php';
        }elseif ($perintah == "print") {
          include 'databarang/print.php';
        }


        elseif ($perintah == "persetujuandata") {
          include '../lelang/persetujuanlelang.php';
        }elseif ($perintah == "bukalelang") {
          include '../lelang/bukalelang.php';
        }elseif ($perintah == "tutuplelang") {
          include '../lelang/tutuplelang.php';
        }
      }
      elseif ($page == ""){
        include "home.php";
    }elseif ($page == "login"){
      include "loginadmin.php";
    }elseif ($page == "account") {
      include 'account.php';
    }
  ?>

  <!-- Footer -->
  <br>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-left text-white">Copyright &copy; Lelang.co.id 2020</p>
      <p class="m-0 text-left text-white">Fakhirul Akmal | SMK YAJ DEPOK</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" level="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" level="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
