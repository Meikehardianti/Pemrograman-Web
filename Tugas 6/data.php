<?php
    include ('koneksi.php'); 
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/960.css">
    </head>
    <body>
        <div class="container_12">
        <div class="grid_5">
            
        </div>
        <div class="grid_7">
        <table class="edu">
            <?php
            $sql = "SELECT * FROM pendidikan";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $link_delete = "<a class='hapusData' href= 'delete.php?Tahun=".$row['Tahun']."'>
                    Delete</a>";
                    echo $row['Tahun']."&emsp;&emsp;&emsp;".$row['Jenjang'] ." &emsp;| $link_delete<br/>";
                }
            }?>
            </table>
        </div>
         </div>
    </body>
    

     
