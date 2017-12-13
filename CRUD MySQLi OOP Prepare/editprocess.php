<?php 
	$conn = new mysqli("localhost","root","alpp","crud");

	if($conn->connect_error){
		die("Gagal terhubung : ".$conn->connect_error);
	}
	$stmt = $conn->prepare("update informasi set nama=?,email=?,alamat=? where id=?");
	$stmt->bind_param('sssi',$_POST['nama'],$_POST['email'],$_POST['alamat'],$_POST['id']);
	$check = $stmt->execute();
	if ($check===false) {
		echo "Gagal mengedit : ".$stmt->error;
	}else{
		$stmt->close();
		$conn->close();
		header("location:home.php");
	}
?>