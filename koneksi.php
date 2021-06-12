<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_undangan";
	// Create connection
$koneksi = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($koneksi,'utf8');

if (mysqli_connect_errno()) {
	echo "Gagal melakukan koneksi ke Database : ".mysqli_connect_error();
} else {
	echo "koneksi berhasil";
}


?>