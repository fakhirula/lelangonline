  <!-- Page Content -->
  <div class="container ">
<?php
  if(isset($_SESSION["username"]))  
  { 
 ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Hi <?php echo $row_akun['nama_lengkap'];?>!</strong> You have successfully logged in as <?php echo $_SESSION['level']; ?>.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>
<div class="jumbotron card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
  <div class="container">
    <h1 class="display-3">Web Sistem<br> Lelang Online.</h1>
    <p class="">Welcome to the Online Auction System Web.</p>
    <hr>
    <?php
    if(isset($_SESSION['username'])) { ?>
      <p style="float: right;">Tanggal: <?php echo date('d F Y'); ?> </p>
    <?php } ?>
    <?php
    if(!isset($_SESSION['username'])) { ?>
    <p class="">Don't have an account? or already have an account?</p>
    <p class="">Select as <a href="?page=login" class="btn btn-primary">Masyarakat</a> / <a href="page/admin/index.php" class="btn btn-primary">Admin</a></p>
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