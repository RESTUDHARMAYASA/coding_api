<?php
//	header("Content-type: application/json; charset=ISO-8859-1");
	include_once "koneksi.php";
		$sql = "UPDATE undangan SET status_datang=0";
		$query = mysqli_query($koneksi,$sql);
		if ($query) {
			echo "update sukses";
		} else {
			echo "update gagal";
		}

	mysqli_close($koneksi);
?>