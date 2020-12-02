<?php
    include ('koneksi.php'); 
    $sql = "DELETE FROM pendidikan WHERE Tahun='".$_GET['Tahun']."'";
    $res = mysqli_query($conn,$sql);
        
