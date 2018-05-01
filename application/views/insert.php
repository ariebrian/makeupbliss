<?php $this->load->helper('form'); ?>
<?php if ($_SESSION['username'] !=='admin') {
  redirect('home');
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	
</head>
<body style="background-color: #f5f5f5">
	

	<!-- isi -->
	<div class="container">
		<div class="jumbotron" style="background-color: #F8BBD0;">
			<center>
				<h5>Tambah Barang</h5>
				<hr>
			</center>
				<?php echo form_open('Barang/insert_barang'); ?>
				<form action="#" method="post">
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
							</div>
							<div class="col-md-1">
								Nama Barang
							</div>
							<div class="col-md-3">
								<input class="form-control1" type="text" name="nama" id="nama" width="150%">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-4">
							</div>
							<div class="col-md-1">
								Harga
							</div>
							<div class="col-md-3">
								<input type="number" class="form-control1" name="harga" id="harga">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-4">
							</div>
							<div class="col-md-1">
								Kategori
							</div>
							<div class="col-md-3">
								  <input type="radio" name="kategori" value="1"> Wajah <br>
								  <input type="radio" name="kategori" value="2"> Mata <br>
								  <input type="radio" name="kategori" value="3"> Skin <br>
								   <input type="radio" name="kategori" value="4"> Lips <br>
								    <input type="radio" name="kategori" value="5"> Body <br>
								     <input type="radio" name="kategori" value="6"> Others <br>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-4">
							</div>
							<div class="col-md-1">
								Deskripsi
							</div>
							<div class="col-md-3">
								<textarea class="form-control1" name="deskripsi" id="" cols="31" rows="5"></textarea>
								<!-- <input class="form-control1" type="" name="alamat" id="alamat" width="150%"> -->
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-6">
							</div>
							<div class="col-md-3">
								<button type="submit" class="btn btn-danger" style="width: 63%">Tambah</button>
							</div>
						</div>
					</div>
				</form>
				<?php echo form_close(); ?>
		</div>
	</div>
</body>
</html>