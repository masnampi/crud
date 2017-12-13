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
			$result = $conn->query("select * from informasi");
			if ($result->num_rows > 0) {
				foreach ($result as $value) {
					echo "<tr><td>".$value['nama']."</td><td>".$value['email']."</td><td>".$value['alamat']."</td><td><a href='add.php'>Tambah</a>\n<a href='hapus.php?id=".$value['id']."'>Hapus</a>\n<a href='edit.php?id=".$value['id']."&nama=".$value['nama']."&email=".$value['email']."&alamat=".$value['alamat']."'>Edit</a></td></tr>";
				}
			}
		?>
	</table>
</body>
</html>