<?php

include('conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$sku = $_POST['sku'];
	$nama_barang = $_POST['nama_barang'];
	$kategori = $_POST['kategori'];
	$jumlah_stok = $_POST['jumlah_stok'];
	$harga_satuan = $_POST['harga_satuan'];

	$query = "UPDATE barang SET sku = '$sku', nama_barang='$nama_barang', kategori='$kategori', jumlah_stok='$jumlah_stok', harga_satuan='$harga_satuan' WHERE sku='$sku' ";
	$result = mysqli_query(connection(), $query);

	header("Location: http://localhost/MEIKE_UTS/");
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	$sku = $_GET['sku'];
	$query_get = "SELECT * FROM barang WHERE sku = '$sku'";
	$result_get = mysqli_query(connection(), $query_get);
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>UPDATE</title>
	<link rel="stylesheet" type="text/css" href="960.css">
</head>

<body>
	<div class="container_12" style="background-image: url(foto.JPG); margin: 200px; height: 200px;">
		<h1>UPDATE DATA BARANG</h1>
		<form action="update.php" method="POST">
			<table>
				<?php while ($data = mysqli_fetch_array($result_get)) : ?>
					<tr>
						<td>
							<label>SKU </label>
						</td>
						<td>
							: <input type="text" name="sku" value="<?php echo $data['sku']; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>NAMA BARANG</label>
						</td>
						<td>
							: <input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>KATEGORI</label>
						</td>
						<td>
							: <select name="kategori">
								<option value="">Pilih Salah Satu</option>
								<option value="Makanan" <?php echo $data['kategori'] == 'Makanan' ? 'selected="selected"' : '' ?>> Makanan</option>
								<option value="Minuman" <?php echo $data['kategori'] == 'Minuman' ? 'selected="selected"' : '' ?>> Minuman</option>
								<option value="ATK" <?php echo $data['kategori'] == 'ATK' ? 'selected="selected"' : '' ?>>ATK</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label>JUMLAH STOK</label>
						</td>
						<td>
							: <input type="text" name="jumlah_stok" value="<?php echo $data['jumlah_stok']; ?>">
						</td>
					</tr>
					<tr>
						<td>
							<label>HARGA SATUAN</label>
						</td>
						<td>
							: <input type="text" name="harga_satuan" value="<?php echo $data['harga_satuan']; ?>">
						</td>
					</tr>
				<?php endwhile ?>
			</table>
			<input type="submit" name="submit" value="Update">
		</form>
	</div>
</body>

</html>