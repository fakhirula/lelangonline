<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'dblelang');

if(mysqli_connect_error()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>