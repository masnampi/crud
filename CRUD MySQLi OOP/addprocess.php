<?php
	$conn = new mysqli("localhost","root","alpp","crud");
	
	if ($conn->connect_error) {
		die("Gagal terkoneksi : ".$conn->connect_error);
	}
	$query = "insert into informasi(nama,email,alamat) values('".$_POST['nama']."','".$_POST['email']."','".$_POST['alamat']."')";
	if ($conn->query($query)===true) {
		header("location:home.php");
	}else{
		echo "Gagal menyimpan : ".$conn->error." kembali ke <a href='home.php'>Home</a>";
	}
	$conn->close();
?>