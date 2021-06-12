<?php
//	header("Content-type: application/json; charset=ISO-8859-1");
	include_once "koneksi.php";
		
		$undangan_id=$_GET['undangan_id'];

		$sql = "UPDATE undangan SET status_datang=1 WHERE undangan_id = $undangan_id";
		$query = mysqli_query($koneksi,$sql);
		if ($query) {
			echo "update sukses";
		} else {
			echo "update gagal";
		}

	mysqli_close($koneksi);
?>