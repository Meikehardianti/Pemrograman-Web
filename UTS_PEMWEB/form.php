<?php

include('conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $sku = $_POST['sku'];
  $nama_barang = $_POST['nama_barang'];
  $kategori = $_POST['kategori'];
  $jumlah_stok = $_POST['jumlah_stok'];
  $harga_satuan = $_POST['harga_satuan'];

  $query = "INSERT INTO barang(sku, nama_barang, kategori, jumlah_stok, harga_satuan) VALUES('$sku', '$nama_barang', '$kategori', '$jumlah_stok', '$harga_satuan')";
  $result = mysqli_query(connection(), $query);
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>ADD DATA</title>
  <link rel="stylesheet" type="text/css" href="960.css">
</head>

<body>
  <div class="container_12" style="background-image: url(foto.JPG); margin: 200px; height: 200px;">
    <div style="text-align: center;">
    <font color="grey"><h1>INPUT DATA BARANG</h1></font>
  </div>
    <form action="form.php" method="POST">
        <table >
          <tr>
            <td>
              <label>SKU </label>
            </td>
            <td>
              : <input type="text" name="sku">
            </td>
          </tr>
          <tr>
            <td>
              <label>NAMA BARANG</label>
            </td>
            <td>
              : <input type="text" name="nama_barang">
            </td>
          </tr>
          <tr>
            <td>
              <label>KATEGORI</label>
            </td>
            <td>
               : <select type="text" name="kategori">
                <option>--- Pilih Salah satu ---</option>
                <option>Makanan</option>
                <option>Minuman</option>
                <option>ATK</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label>JUMLAH STOK</label>
            </td>
            <td>
              : <input type="text" name="jumlah_stok">
            </td>
          </tr>
          <tr>
            <td>
              <label>HARGA SATUAN</label>
            </td>
            <td>
              : <input type="text" name="harga_satuan">
            </td>
          </tr>
        </table> <input type="submit" name="submit" value="Simpan">
        <button><a href="<?php echo "index.php"; ?>">Back</a></button>

    </form>
</body>

</html>