<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//Mendapatkan Nilai Variable
		$nama = $_POST['nama'];
		$jurusan = $_POST['jurusan'];
		$email = $_POST['email'];
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO mahasiswa (nama,jurusan,email)
		VALUES ('$nama','$jurusan','$email')";
		//Import File Koneksi database
		require_once('koneksi.php');
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Mahasiswa';
		}else{
			echo 'Gagal Menambahkan Mahasiswa';
		}
		mysqli_close($con);
	}
?>