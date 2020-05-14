<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//Mendapatkan Nilai Dari Variable
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$jurusan = $_POST['jurusan'];
		$email = $_POST['email'];
		//import file koneksi database
		require_once('koneksi.php');
		//Membuat SQL Query
		$sql = "UPDATE mahasiswa SET nama = '$nama',
		jurusan = '$jurusan', email = '$email' WHERE id = $id;";
		//Meng-update Database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Data Mahasiswa';
		}else{
			echo 'Gagal Update Data Mahasiswa';
		}
		mysqli_close($con);
	}
?>