<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');

  $id_lelang = $_POST['id_lelang'];
  $id_barang = $_POST["id_barang"];
  $id_user = $_POST["id_user"];
  $penawaran_harga = $_POST["penawaran_harga"];
  
$sql = $koneksi->query("insert into history_lelang (id_lelang, id_barang, id_user, penawaran_harga) values('$id_lelang', '$id_barang', '$id_user', '$penawaran_harga')");
    
    if ($sql){
      ?>
        <script type="text/javascript">
          alert("Terkirim");
          window.location.href="lelang.php";
        </script>

      <?php
    }

?>