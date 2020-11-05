<?php 

include('conn.php');

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>AYO</title>
	<link rel="stylesheet" type="text/css" href="960.css">
</head>
<body>
	<div class="container_12"  style="background-image: url(foto1.JPG);">
		<div class="foto">
	<div style="text-align: center; font-size: 25px;">
		<font color="brown"><H1>BAROKAH MINIMARKET</H1></font>
	</div>
	<button><a href="<?php echo "form.php"; ?>">Tambah Data</a></button>
	<button><a href="<?php echo "search.php"; ?>">Cari Data</a></button>
	        <form action="filter_range.php" method="post">
	        <div class="td">
            <table border="0px" cellpadding="5px" cellspacing="0px" class="text " style="font-weight: bold;">
                <tr>
                    <td colspan="6" style="text-align: center;">Range Harga</td>
                <tr>
                    <td>
                        <label for="min_harga">Min : </label>
                        <input type="text" name="min_harga" id="min_harga">
                    </td>

                    <td>
                        <label for="max_harga">Max : </label>
                        <input type="text" name="max_harga" id="max_harga">
                    </td>

                    <td>
                        <button type="submit" name="submitfilter">Filter</button>
                    </td>
                </tr>
                </tr>
            </table>
            </div>

         <div style="text-align: center;">
		<h1>DATA BARANG </h1></div>
		<form method="POST" action="form.php">
 	<table border="1" style="margin-left: auto; margin-right: auto; font-size: 20px; text-align: center; font-weight: bold;">
 		<tr>
 			<th>SKU</th>
 			<th>NAMA BARANG</th>
 			<th>KATEGORI</th>
 			<th>JUMLAH STOK</th>
 			<th>HARGA SATUAN</th>
 			<th>ACTION</th>
 		</tr>
 	<tbody>
 		<?php 
 		$query = "SELECT * FROM barang";
 		$result = mysqli_query(connection(),$query); ?>

 		<?php while($data = mysqli_fetch_array($result)): ?>
 			<tr>
 				<td><?php echo $data['sku']; ?></td>
 				<td><?php echo $data['nama_barang']; ?></td>
 				<td><?php echo $data['kategori']; ?></td>
 				<td><?php echo $data['jumlah_stok']; ?></td>
 				<td><?php echo $data['harga_satuan']; ?></td>
 				<td>
 					<a href="<?php echo "update.php?sku=".$data['sku']; ?>" class="btn btn-outline-warning btn-sm"> Update</a> &nbsp;&nbsp;
                     <a href="<?php echo "delete.php?sku=".$data['sku']; ?>" class="btn btn-outline-warning btn-sm"> Delete</a> <br>
                </td>
 			</tr>
 		<?php endwhile ?>
 	</tbody>
 	</table>
 	</form>
 	</div>
 	</div>
</body>
</html>