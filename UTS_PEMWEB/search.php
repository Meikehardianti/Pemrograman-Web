<!DOCTYPE html>
<head>
    <title>Search</title>
    <link rel="stylesheet" type="text/css" href="960.css">
</head>
<body>
    <div class="container_12" style="background-image: url(foto.JPG);">
	<form action="search.php" method="GET">
        <div style="text-align: center;">
            <font color="grey"><h1>CARI BARANG</h1></font>
        </div>
            <label>Cari Barang : </label>
            <input type="text" name="cari">
            <input type="submit" value="Cari">
    </form>
        <table border="1px" style="font-size: 20px; text-align: center; font-weight: bold;">
            <tr>
                <th>SKU</th>
                <th>NAMA BARANG</th>
                <th>KATEGORI</th>
                <th>JUMLAH STOK</th>
                <th>HARGA SATUAN</th>
            </tr>
            <?php
            include('conn.php');

            if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $query = "SELECT * FROM barang WHERE nama_barang LIKE '%" . $cari . "%' OR sku LIKE '%" . $cari . "%' OR kategori LIKE '%" . $cari . "%'";
                $search = mysqli_query(connection(), $query);
            } else {
                $query = "SELECT * FROM barang";
                $search = mysqli_query(connection(), $query);}
                $no = 1;
                while ($data = mysqli_fetch_array($search)) : ?>
                    <tr>
                        <td><?php echo $data['sku']; ?></td>
                        <td><?php echo $data['nama_barang']; ?></td>
                        <td><?php echo $data['kategori']; ?></td>
                        <td><?php echo $data['jumlah_stok']; ?></td>
                        <td><?php echo $data['harga_satuan']; ?></td>
                    </tr>
                <?php endwhile; ?>
        </table>
        <button onclick="window.location.href='http://localhost/MEIKE_UTS/'">Back</button>
    </div>
</body>
</html>