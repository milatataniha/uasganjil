<!DOCTYPE html>
<html>
<head>
	<!--untuk CSS-->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!--untuk CSS-->
	<title>LUAS LINGKARAN</title>
</head>
<body>
	<?php
		if (isset($_POST['hitung'])) {
			$Jarijari =$_POST['Jarijari'];
			$phi = 22/7;
			//menghitung luas lingkaran
			$luas_lingkaran = $phi*($Jarijari*$Jarijari);
			//menghitung luas lingkaran
		}
	?>
	<div class="perhitungan">
		<h2><u><center>LUAS LINGKARAN</center></u></h2>
		<form method="post" action="index.php">	
		<label for="exampleFormControlInput1">Masukkan Jari-jari</label>		
			<input type="text" name="Jarijari" class="bil" autocomplete="off" placeholder="">
		<div class="row">
			<center><input type="submit" name="hitung" value="Hitung" class="tombol"></center>
		</div>
	</form>
	<div class="row"><center>
	<?php if(isset($_POST['hitung'])){ ?>
			<label for="exampleFormControlInput1" class="nua">Hasil</label>
			<input type="text" value="<?php echo $luas_lingkaran; ?>" class="nua">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?></center>
	</div>
	</div>


	<!--untuk javascript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--untuk javascript-->
</body>
</html>