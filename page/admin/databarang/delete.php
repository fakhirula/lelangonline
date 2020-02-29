<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');
$id_barang   = $_GET['id_barang'];
$query="DELETE from tb_barang where id_barang='$id_barang'";
mysqli_query($koneksi, $query);
header("location:?page=admin&perintah=databarang");
?>