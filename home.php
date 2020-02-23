  <!-- Page Content -->
  <div class="container ">
<?php
if(isset($_SESSION["username"]))  
 { 
 ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Hi <?php echo $_SESSION['username']; ?>!</strong> Kamu berhasil login sebagai <?php echo $_SESSION['level']; ?>.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>
<div class="jumbotron shadow-lg rounded" style="background: url(img/jumbo.jpg);">
  <div class="container shadow p-3 rounded">
    <h5 class="display-5">Selamat Datang  di halaman masyarakat.</h5>
    <h1 class="display-4">Sistem Lelang Online</h1>
    <hr>
    <?php 
    if(!isset($_SESSION['username'])) { ?>
    <p class="">Belum punya akun? atau sudah ada akun?</p>
    <p class="">Pilih sebagai <a href="?page=login" class="btn btn-primary">Masyarakat</a> / <a href="page/admin/index.php" class="btn btn-primary">Admin</a></p>
    <?php } ?>
  </div>
</div>


    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100 shadow p-3 rounded">
          <img class="card-img-top" src="http://placehold.it/300x200" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100 shadow p-3 rounded">
          <img class="card-img-top" src="http://placehold.it/300x200" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus totam ut praesentium aut.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100 shadow p-3 rounded">
          <img class="card-img-top" src="http://placehold.it/300x200" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
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