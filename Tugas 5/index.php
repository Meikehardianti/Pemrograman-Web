<?php 

	include('conn.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Curriculum Vitae</title>
	<style type="text/css">
	</style>
	<link rel="stylesheet" type="text/css" href="css/960.css">
	<link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body>
	<?php 
	$creatve = "Creative";
	$teamwork = "Teamwork";
	$communication = "Communication";
	$intuisi = "Intuisi";
	$musik = "Listening Music";
	$tv = "Watching Movie";
	$makan = "Eating";
	$eskrim = "Ice Cream";
	$liburan = "Travelling";
	$indo = "Indonesia";
	$ing = "English";
	?>
	 
	 <div class="container_12">
	 	<div class="grid_5">
	 		<div class="body">
	 			<img class="foto1" src="img/foto.jpg">
				<div class="text1">
					<?php 
			 		$query_profil = "SELECT * FROM profil";
					$result_profil = mysqli_query(connection(),$query_profil);
				?>
					<?php while ($data_profil = mysqli_fetch_array($result_profil)) : ?>
					<?php echo $data_profil['Nama']; ?> <br>
					<?php echo $data_profil['Jurusan']; ?> <br>
					<?php echo $data_profil['Instansi']; ?> 
				</div>
	 		</div>
	 		<div class="body2">
	 			<div class="text4">
					<h3>PROFILE</h3>
					<hr color="#FAC7C7">
					<?php echo $data_profil['Profil_lengkap']; ?> 
					<?php endwhile ?>
				</div>
	 		<div class="text5">
				<h3>CONTACT INFORMATION</h3>
				<hr color="#FAC7C7">
				<?php 
			 		$query_kontak = "SELECT * FROM kontak";
					$result_kontak = mysqli_query(connection(),$query_kontak);
				?>
					<?php while ($data_kontak = mysqli_fetch_array($result_kontak)) : ?>
						<img class="foto2" src="img/telepon.PNG">&emsp;&emsp;&emsp; <?php echo $data_kontak['telepon']; ?> <br> <br>
						<img class="foto2" src="img/gmail.JPG">&emsp;&emsp;&emsp; <?php echo $data_kontak['gmail'] ?><br> <br>
						<img class="foto2" src="img/rumah.PNG">&emsp;&emsp;&emsp; <?php echo $data_kontak['rumah'] ?>
					<?php endwhile ?>
			</div>
			<div class="text5">
				<h3>SOCIAL MEDIA</h3>
				<hr color="#FAC7C7">
				<?php 
					$query_sosmed = "SELECT * FROM sosial_media";
					$result_sosmed = mysqli_query(connection(),$query_sosmed);
				?>
					 <?php while ($data_sosmed = mysqli_fetch_array($result_sosmed)) : ?>
					<img class="foto2" src="img/fb.PNG">&emsp;&emsp;&emsp; <?php echo $data_sosmed['fb']; ?> <br> <br>
					<img class="foto2" src="img/instagram.JPG">&emsp;&emsp;&emsp;<?php echo $data_sosmed['ig']; ?><br> <br>
					<img class="foto2" src="img/line.JPG">&emsp;&emsp;&emsp; <?php echo $data_sosmed['line']; ?>
				<?php endwhile ?>
				</div>
			</div>
	 	</div>
	 	<div class="grid_7">
	 		<h2>EDUCATION</h2>
				<hr color="#FAC7C7">
				<table class="text2">
				<tbody>
					<?php 
						$query_pendidikan = "SELECT * FROM pendidikan";
						$result_pendidikan = mysqli_query(connection(),$query_pendidikan);
					 ?>

						 <?php while($data_pendidikan = mysqli_fetch_array($result_pendidikan)): ?>
			 				<tr>
			 					<td><?php echo $data_pendidikan['Tahun']; ?></td>
			 					<td><?php echo $data_pendidikan['Jenjang']; ?></td>
			 				</tr>
			 		<?php endwhile ?>
				</tbody>
				</table>
				<h2>ORGANIZATION</h2>
					<hr color="#FAC7C7">
					<table class="text3">
					<tbody>
						<?php 
							$query_organisasi = "SELECT * FROM Organisasi";
							$result_organisasi = mysqli_query(connection(),$query_organisasi);
						 ?>

							 <?php while($data_organisasi = mysqli_fetch_array($result_organisasi)): ?>
							 	<tr>
							 		<td><?php echo $data_organisasi['Tahun']; ?></td>
					 				<td><?php echo $data_organisasi['Organisasi']; ?></td>
					 			</tr>
					 	<?php endwhile ?>
				</tbody>
			</table>
				<h2>INDIVIDUAL</h2>
				<hr color="#FAC7C7">
				<h3><?php echo "$creatve"; ?></h3>
				<div class="bar1"><div class="bar2"><p>100%</p></div></div>
				<h3><?php echo "$teamwork"; ?></h3>
				<div class="bar1"><div class="bar3"><p>100%</p></div></div>
				<h3><?php echo "$communication"; ?></h3>
				<div class="bar1"><div class="bar4"><p>100%</p></div></div>
				<h3><?php echo "$intuisi"; ?></h3>
				<div class="bar1"><div class="bar5"><p>100%</p></div></div>

				<h2>INTERESTS</h2>
				<hr color="#FAC7C7">
				&emsp;<img class="foto3" src="img/musik.JPG">&emsp;&emsp;
				<img class="foto3" src="img/tv.PNG">&emsp;
				<img class="foto3" src="img/makanan.PNG">&emsp;
				<img class="foto3" src="img/eskrim.JPG">&emsp;&emsp;
				<img class="foto3" src="img/travelling.JPG"> <br>
				<b><?php echo "$musik"; ?>&emsp;
				<?php echo "$tv"; ?>&emsp;
				<?php echo "$makan"; ?>&emsp;&emsp;
				<?php echo "$eskrim"; ?>&emsp;&emsp;
				<?php echo "$liburan"; ?></b>

				<h2>LANGUAGE</h2>
				<hr color="#FAC7C7">
				<img class="foto4" src="img/indonesia.JPG"> &emsp;&emsp;&emsp;
				<img class="foto4" src="img/inggris.JPG"> <br>
				<b>&emsp;<?php echo "$indo"; ?> &emsp;&emsp;&emsp;&emsp;&emsp;
				<?php echo "$ing"; ?></b>
	 	</div>
	 </div>
</body>
</html>