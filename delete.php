<?php
	//Mendapatkan Nilai ID
	$id = $_GET['id'];
	//Import File Koneksi Database
	require_once('koneksi.php');
	//Membuat SQL Query
	$sql = "DELETE FROM mahasiswa WHERE id=$id;";
	//Menghapus Nilai pada Database
	if(mysqli_query($con,$sql)){
		echo 'Berhasil Menghapus Mahasiswa';
	}else{
		echo 'Gagal Menghapus Mahasiswa';
	}
	mysqli_close($con);
?>