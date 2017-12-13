<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
	<form method="POST" action="editprocess.php">
		<table>
			<tr>
				<td>ID</td>
				<td><input type="text" name="id" value="<?php echo $_GET['id'];?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $_GET['nama'];?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $_GET['email'];?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $_GET['alamat'];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Proses"></td>
			</tr>
		</table>
	</form>
</body>
</html>