<?php 
	$conn = new mysqli("localhost","root","alpp","crud");

	if($conn->connect_error){
		die("Gagal terhubung : ".$conn->connect_error);
	}

	$query="update informasi set nama='".$_POST['nama']."',email='".$_POST['email']."',alamat='".$_POST['alamat']."' where id=".$_POST['id']."";

	if ($conn->query($query)===true) {
		header("location:home.php");
	}else{
		echo "Gagal mengedit : ".$conn->error." kembali ke <a href='home.php'>Home</a>";
	}
	$conn->close();
?>