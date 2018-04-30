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
		
		<!-- kategori -->
		<!-- <?php echo $cat[0]->nama_kategori ?> -->
		<br>

		<!-- produk baru -->
		<div class="content-full">
			<p class="content-header" style="color: #c83349;"><?php echo $cat[0]->nama_kategori ?></p>
			<div class="container-fluid" >
				<div class="row" >
					<?php foreach ($cat as $kat) { ?>
						
						<div class="col-md-2">
							<a href="<?php echo base_url().'index.php/product/'.$kat->id_brg; ?>" style="text-decoration: none;">
								<div class="card">	
									<center>
										<img class="card-img-top" style="padding-top: 5px;" src="<?php echo base_url(); ?>assets/img/logo.jpg" width="50%" height="50%" alt="">
										<br>
										<br>	
									</center>
										<p style="color: black; padding-left: 5px;"><?php echo $kat->nama_barang; ?></p>
										<p style="color: #c83349; padding-left: 5px;">Rp <?php echo number_format($kat->harga,2,",","."); ?></p>
								</div>
							</a>
						</div>
						<hr>
					<?php } ?>
					

				</div>
				<br>
			</div>
			<br>
		</div>
		
	</div>

</body>
</html>