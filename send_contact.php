<!-- Page Content -->
<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');

  $nama_lengkap = $_POST['nama_lengkap'];
  $telp = $_POST["telp"];
  $tgl = date('Y-m-d');
  $perihal = $_POST["perihal"];
  $masalah = $_POST["masalah"];
  
    $sql = $koneksi->query("insert into hubungi (nama_lengkap, telp, tgl, perihal, masalah) values('$nama_lengkap', '$telp', '$tgl', '$perihal', '$masalah')");
    
    if ($sql){
      ?>
        <script type="text/javascript">
          alert("Terima kasih,, pesanmu sudah terkirim");
          window.location.href="index.php";
        </script>

      <?php
    }

?>