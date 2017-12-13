<?php
	$conn = new mysqli("localhost","root","alpp","crud");
	
	if($conn->connect_error){
		die("gagal terkoneksi".$conn->connect_error);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
	<table>
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<?php
		/*tidak usah mengecek ===true karena itu hanya digunakan untuk perintah insert update delete saja*/
		$result = $conn->query("select * from informasi");
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "<tr><td>".$row['nama']."</td><td>".$row['email']."</td><td>".$row['alamat']."</td><td><a href='edit.php?id=".$row['id']."&nama=".$row['nama']."&email=".$row['email']."&alamat=".$row['alamat']."'>Edit</a>\n<a href='hapus.php?id=".$row['id']."'>Hapus</a>\n<a href='add.php'>Tambah</a></td></tr>";
				}
			}
			$conn->close();
		?>
	</table>
</body>
</html>