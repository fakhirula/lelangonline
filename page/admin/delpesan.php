<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');
$id_hubungi   = $_GET['id_hubungi'];
$query="DELETE from hubungi where id_hubungi='$id_hubungi'";
mysqli_query($koneksi, $query);
header("location:?page=pesan");
?>