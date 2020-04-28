<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');

  $id_lelang = $_POST["id_lelang"];
  $id_barang = $_POST["id_barang"];
  $id_user = $_POST["id_user"];
  $penawaran_harga = $_POST["penawaran_harga"];
  
$sql = $koneksi->query("insert into history_lelang (id_lelang, id_barang, id_user, penawaran_harga) values('$id_lelang', '$id_barang', '$id_user', '$penawaran_harga')");
    
    if ($sql){

      $sqlupdate = $koneksi->query("Update tb_lelang Set harga_akhir='$penawaran_harga', id_user='$id_user'
             Where id_lelang='$id_lelang'");

        if ($sqlupdate){
            ?>
              <script type="text/javascript">
                alert("Terkirim, Anda dialihkan kehalaman lelang");
                 window.location.href="?page=lelang";
              </script>

            <?php
        }
    }

?>