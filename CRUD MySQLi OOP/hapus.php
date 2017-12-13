<?php
	$conn = new mysqli("localhost","root","alpp","crud");

	if ($conn->connect_error) {
		die("Gagal terkoneksi : ".$conn->connect_error);
	}

	$query = "delete from informasi where id=".$_GET['id']."";
	if ($conn->query($query)===true){
		header('location:home.php');
	}else{
		echo "Gagal menghapus : ".$conn->error." kembali ke <a href='home.php'>Home</a>";
	}
	$conn->close();
?>