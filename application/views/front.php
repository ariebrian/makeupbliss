<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	
</head>
<body>
	<!-- isi -->
	<div class="container-fluid" style="margin-left: 15px; padding-right: 40px;">
		<!-- selamat datang -->
		<div class="jumbotron" style="background-color: #F8BBD0; padding-top: 20px; padding-bottom: 30px;">
			<img src="<?php echo base_url(); ?>assets/img/logo.jpg" width="120" height="120" class="d-inline-block align-center" alt="">
			<span class="title-jumbo">MAKEUPBLISS.ID</span>
			<br>
			<hr>
			<h3 style="color: #c83349;">Selamat Datang</h3>
			
			<p style="color: #c83349;">Temukan Kosmetik dan Skincare Khusus Untukmu!!</p>
		</div>
		
		<!-- kategori -->
		<div class="content-full">
			<p class="content-header" style="color: #c83349;">Kategori</p>
			<div class="container-fluid" style="background-color: white;">
				<div class="row" >
					<!-- <?php 
						// var_dump($category);
						// die();
					 ?> -->
					<?php foreach ($category as $cat) { ?>
						
					<div class="col-md-2" style=" border-left: solid;border-width: 1px; ">
						<a href="#" style="text-decoration: none;">
							<center>
								<img class="img-responsive" style="padding-top: 5px;" src="<?php echo base_url(); ?>assets/img/logo.jpg" width="50%" height="50%" alt="">
								<br>
								<br>	
								<p style="color: #c83349"><?php echo $cat->nama_kategori; ?></p>
							</center>
						</a>
					</div>
					<?php  } ?>
					
				</div>
			</div>

		</div>

		<br>

		<!-- produk baru -->
		<div class="content-full">
			<p class="content-header" style="color: #c83349;">Produk Baru</p>
			<div class="container-fluid" >
				<div class="row" >
					<?php foreach ($barang as $new) { ?>
						
						<div class="col-md-2">
							<a href="#" style="text-decoration: none;">
								<div class="card">	
									<center>
										<img class="card-img-top" style="padding-top: 5px;" src="<?php echo base_url(); ?>assets/img/logo.jpg" width="50%" height="50%" alt="">
										<br>
										<br>	
									</center>
										<p style="color: black; padding-left: 5px;"><?php echo $new->nama_barang; ?></p>
										<p style="color: #c83349; padding-left: 5px;">Rp <?php echo $new->harga; ?></p>
								</div>
							</a>
						</div>
					<?php } ?>
					

				</div>
			</div>

		</div>
		
	</div>

</body>
</html>