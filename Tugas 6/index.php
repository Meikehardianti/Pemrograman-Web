<?php 

	include('koneksi.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Curriculum Vitae</title>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body>	 
	 <div class="container_12">
	 	<div class="grid_5">
	 		<div class="body">
	 			<img class="foto1" src="img/foto.jpg">
				<div class="text1">
					<?php 
			 		$sql = "SELECT * FROM profil";
					$result = mysqli_query($conn,$sql);
				?>
					<?php while($data = mysqli_fetch_array($result)): ?>
					<?php echo $data['Nama']; ?> <br>
					<?php echo $data['Jurusan']; ?> <br>
					<?php echo $data['Instansi']; ?> 
				</div>
	 		</div>
	 		<div class="body2">
	 			<div class="text4">
					<h3>PROFILE</h3>
					<hr color="#FAC7C7">
					<?php echo $data['Profil_lengkap']; ?> 
					<?php endwhile ?>
				</div>
	 		<div class="text5">
				<h3>CONTACT INFORMATION</h3>
				<hr color="#FAC7C7">
				<?php 
			 		$sql = "SELECT * FROM kontak";
					 $result = mysqli_query($conn,$sql);
				?>
					<?php while($data = mysqli_fetch_array($result)): ?>
						<img class="foto2" src="img/telepon.PNG">&emsp;&emsp;&emsp; <?php echo $data['telepon']; ?> <br> <br>
						<img class="foto2" src="img/gmail.JPG">&emsp;&emsp;&emsp; <?php echo $data['gmail'] ?><br> <br>
						<img class="foto2" src="img/rumah.PNG">&emsp;&emsp;&emsp; <?php echo $data['rumah'] ?>
					<?php endwhile ?>
			</div>
			<div class="text5">
				<h3>SOCIAL MEDIA</h3>
				<hr color="#FAC7C7">
				<?php 
					$sql = "SELECT * FROM sosial_media";
					 $result = mysqli_query($conn,$sql);
				?>
					<?php while($data = mysqli_fetch_array($result)): ?>
					<img class="foto2" src="img/fb.PNG">&emsp;&emsp;&emsp; <?php echo $data['fb']; ?> <br> <br>
					<img class="foto2" src="img/instagram.JPG">&emsp;&emsp;&emsp;<?php echo $data['ig']; ?><br> <br>
					<img class="foto2" src="img/line.JPG">&emsp;&emsp;&emsp; <?php echo $data['line']; ?>
				<?php endwhile ?>
				</div>
			</div>
	 	</div>
	 	<div class="grid_7">
	 		<h2>EDUCATION</h2>
	 		<hr color="#FAC7C7">
			<table class="text2">
	 		 <div class="sub">
                <form action="simpan.php" method="POST">
                	<h3>Add Education</h3>
                    <input type="text" name="Tahun" placeholder="Masukan Tahun Pendidikan Anda"/>
                    <input type="text" name="Jenjang" placeholder="Masukan Jenjang Pendidikan Anda"/>
                    <input type="submit" name="submit" value="Simpan"/> <br> <br>
                </form>
               <div id="content">
                
            </div>
            </div>
            </table>
	 		
				<h2>ORGANIZATION</h2>
					<hr color="#FAC7C7">
					<table class="text3">
					<tbody>
						<?php 
							$sql = "SELECT * FROM Organisasi";
							$result = mysqli_query($conn,$sql);
						 ?>

							 <?php while($data = mysqli_fetch_array($result)): ?>
							 	<tr>
							 		<td><?php echo $data['Tahun']; ?></td>
					 				<td><?php echo $data['Organisasi']; ?></td>
					 			</tr>
					 	<?php endwhile ?>
				</tbody>
			</table>
				<h2>INDIVIDUAL</h2>
				<hr color="#FAC7C7">
				<h3>Creative</h3>
				<div class="bar1"><div class="bar2"><p>100%</p></div></div>
				<h3>Teamwork</h3>
				<div class="bar1"><div class="bar3"><p>100%</p></div></div>
				<h3>Communication</h3>
				<div class="bar1"><div class="bar4"><p>100%</p></div></div>
				<h3>Intuisi</h3>
				<div class="bar1"><div class="bar5"><p>100%</p></div></div>

				<h2>INTERESTS</h2>
				<hr color="#FAC7C7">
				&emsp;<img class="foto3" src="img/musik.JPG">&emsp;&emsp;
				<img class="foto3" src="img/tv.PNG">&emsp;
				<img class="foto3" src="img/makanan.PNG">&emsp;
				<img class="foto3" src="img/eskrim.JPG">&emsp;&emsp;
				<img class="foto3" src="img/travelling.JPG"> <br>
				<b>Listening Music&emsp;
				Watching Movie&emsp;
				Eating&emsp;&emsp;
				Ice Cream&emsp;&emsp;
				Travelling</b>

				<h2>LANGUAGE</h2>
				<hr color="#FAC7C7">
				<img class="foto4" src="img/indonesia.JPG"> &emsp;&emsp;&emsp;
				<img class="foto4" src="img/inggris.JPG"> <br>
				<b>&emsp;Indonesia &emsp;&emsp;&emsp;&emsp;&emsp;
				English</b>
	 	</div>
	 </div>

            <script type="text/javascript">
                $(document).ready(function(){
                loadData();

                $('form').on('Simpan',function(e){
                    e.preventDefault();
                    $.ajax({
                        type:$(this).attr('method'),
                        url:$(this).attr('action'),
                        data:$(this).serialize(),
                        success:function(){
                            loadData();
                            resetForm();
                        }
                    });
                })
                })

                function loadData(){
                    $.get('data.php',function(data){
                        $('#content').html(data)
                        $('.hapusData').click(function(e){
                            e.preventDefault();
                            $.ajax({
                        type:'get',
                        url:$(this).attr('href'),
                        success:function(){
                            loadData();
                            
                        }
                    });
                        })
                    })
                }

                function resetForm(){
                    $('[type=text]').val('');
                    $('[name=Tahun]').focus();
                }
            </script>
</body>
</html>