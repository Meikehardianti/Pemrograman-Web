<?php

include ('koneksi.php'); 

if(isset($_POST['Tahun'])){
    $Tahun = $_POST['Tahun'];
    $Jenjang = $_POST['Jenjang'];
    $sql = "INSERT INTO pendidikan VALUES ('$Tahun', '$Jenjang')";
    if(mysqli_query($conn,$sql)){
        echo "Sukses";
    } else {
        echo "Error".mysqli_error($conn);
    }
    header("location: index.php");
}