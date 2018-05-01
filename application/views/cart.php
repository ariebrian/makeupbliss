<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body style="background-color: #f5f5f5">
	<div class="container" style="margin-top:5px;	">
		<div class="content-full">
			<p class="content-header">Cart</p>
				<div class="row" style="background-color: white; padding-left: 165px; padding-top: 20px;">
					<ul class="navmainlist" style="">
						  <li class="navlist" style="padding-right: 50px;"><a href="#">Foto Barang</li>
						  <li class="navlist" style="padding-bottom: 30px;"><a href="#">Nama Barang</a></li>
					</ul>
					<ul class="navmainlist">
						<li class="navlistright"><a href="#">Qty</a></li>
						<li class="navlistright"><a href="login.html">Harga</a></li>
						
					</ul>
							
				</div>
				<hr>
			<?php foreach ($cart as $go): ?>
				
				<div class="row" style="background-color: white; padding-left: 165px; padding-top: 20px;">
					<ul class="navmainlist" style="">
						  <li class="navlist"><a href="#"><img src="<?php echo base_url(); ?>assets/img/logo.jpg" width="150px" height="150px" alt=""></a></li>
						  <li class="navlist"><a href="#"><?php echo $go->nama_barang ?></a></li>
					</ul>
					<ul class="navmainlist">
						<li class="navlistright"><a href="#"><?php echo $go->qty ?></a></li>
						<li class="navlistright"><a href="login.html"><?php echo $go->harga ?></a></li>
						<li class="navlistright">
							
							<button type="submit" class="btn btn-danger" >Hapus</button>
						</li>
					</ul>
							
				</div>
			<?php endforeach ?>
		</div>
	
	</div>

</body>
</html>