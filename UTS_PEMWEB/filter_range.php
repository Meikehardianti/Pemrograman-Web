<?php
include('conn.php');

$min = $_POST["min_harga"];
$max = $_POST["max_harga"];
$query = "SELECT * FROM barang WHERE harga_satuan BETWEEN $min AND $max";
$filter = mysqli_query(connection(), $query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Filter Range Harga</title>
    <link rel="stylesheet" type="text/css" href="960.css">
</head>

<body>
    <div class="container_12" style="background-image: url(foto.JPG);">
        <div style="text-align: center;">
        <h1>FILTER RANGE HARGA</h1></div>
        <table border="1px" style="margin-left: auto; margin-right: auto; font-size: 20px; text-align: center; font-weight: bold;">
            <tr>
                <th>SKU</th>
                <th>NAMA BARANG</th>
                <th>KATEGORI</th>
                <th>JUMLAH STOK</th>
                <th>HARGA SATUAN</th>
            </tr>

            <?php while ($data = mysqli_fetch_array($filter)) : ?>
                <tr>
                    <td><?php echo $data['sku']; ?></td>
                    <td><?php echo $data['nama_barang']; ?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td><?php echo $data['jumlah_stok']; ?></td>
                    <td><?php echo $data['harga_satuan']; ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
        <br>
        <button onclick="window.location.href='http://localhost/MEIKE_UTS/'">Back</button>
    </div>
</body>

</html>