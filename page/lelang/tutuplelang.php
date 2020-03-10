<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');
$id_barang   = $_GET['id_barang'];
$status = 'ditutup';
$query = $koneksi->query("update tb_lelang set status='$status' where id_barang='$id_barang'");
mysqli_query($koneksi, $query);
header("location:?page=admin&perintah=persetujuandata");




?>