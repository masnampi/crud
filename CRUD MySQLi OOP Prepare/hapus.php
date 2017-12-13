<?php
	$conn = new mysqli("localhost","root","alpp","crud");

	if($conn->connect_error) {
		die("Gagal terkoneksi : ".$conn->connect_error);
	}
	$stmt = $conn->prepare("delete from informasi where id=?");
	$stmt->bind_param('i',$_GET['id']);
	$check=$stmt->execute();
	if ($check===false) {
		echo "Gagal menghapus : ".$stmt->error;
	}else{
		$stmt->close();
		$conn->close();
		header("location:home.php");
	}
?>