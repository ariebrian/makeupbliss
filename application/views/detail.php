<?php $this->load->helper('form'); ?>
<?php $id = end($this->uri->segments); ?>
<?php //var_dump($id);die(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Barang 1</title>
	
</head>
<body style="background-color: #f5f5f5">
	<!-- isi -->
	<div class="container" style="margin-top:5px;">
		<div class="row">
			<div class="col-md-4">
				<img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="">
			</div>
			<div class="col-md-8" style="background-color: white;">
				<h5 style="text-align: center; margin-top: 20px;"><?php echo $barang[0]->nama_barang; ?></h5>
				<br>
				<div class="row">
					<div class="col-md-7">

						<h6 style="color: #c83349">Rp <?php echo number_format($barang[0]->harga,2,",","."); ?></h6>
					</div>
					<div class="col-md-2">
						<button class="btn btn-danger" style="width: 100%; height: 80%">Wishlist</button>
					</div>
					<div class="col-md-3">
						<a href="<?php echo base_url('index.php/Barang/add_cart/'.$barang[0]->id_brg) ?>">
							
							<button class="btn btn-danger" name="id" type="submit" style="width: 100%; height: 80%">Beli Sekarang</button>
						</a>
					</div>
				</div>
				<hr>
				<?php echo $barang[0]->nama_kategori ?>
				<hr>
				<?php echo $barang[0]->deskripsi ?>
			</div>
		</div>
	</div>

</body>
</html>