<?php
	$conn = new mysqli("localhost","root","alpp","crud");
	
	if ($conn->connect_error) {
		die("Gagal terkoneksi : ".$conn->connect_error);
	}
	$stmt = $conn->prepare('insert into informasi(nama,email,alamat) values(?,?,?)');
	$stmt->bind_param('sss',$_POST['nama'],$_POST['email'],$_POST['alamat']);
	$check = $stmt->execute();
	if ($check===false){
		echo "Gagal menambah : ".$stmt->error;
	}else{
		$stmt->close();
		$conn->close();
		header("location:home.php");
	}
?>