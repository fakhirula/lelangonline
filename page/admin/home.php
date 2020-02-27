   <div class="container">
    <?php
if(isset($_SESSION["username"]))  
 { 
 ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Hi <?php echo $row_akun['nama_petugas']; ?>!</strong> Kamu berhasil login sebagai <?php echo $_SESSION['level']; ?>.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>
<div class="jumbotron card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
  <div class="container">
    <h5 class="display-5">Selamat Datang di halaman Admin & Petugas.</h5>
    <h1 class="display-4">Sistem Lelang Online</h1>
    <hr>
    <?php 
    if(!isset($_SESSION['username'])) { ?>
    <p class="">Belum punya akun? atau sudah ada akun?</p><a href="?page=login" class="btn btn-primary">Klik!</a> atau kembali ke Halaman Masyarakat <a href="../../index.php" class="btn btn-primary">Klik!</a></p>
    <?php } ?>
  </div>
</div>
    

    <hr>
    <!-- /.row -->
    <div class="row">
      <div class="col-md-8 mb-5">
        <h2>What We Do</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
        <a class="btn btn-primary btn-lg" href="#">Call to Action &raquo;</a>
      </div>
      <div class="col-md-4 mb-5">
        <h2>Contact Us</h2>
        <hr>
        <address>
          <strong>Lelang.co.id</strong>
          <br>112 27 Stockholm, Sweden
          <br>Kungsbroplan 1, 4 fl
          <br>
        </address>
        <address>
          <abbr title="Phone">Phone:</abbr>
          (62) 123-456-789
          <br>
          <abbr title="Email">Email:</abbr>
          <a href="mailto:inyour@lelang.com">inyour@lelang.com</a>
        </address>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->