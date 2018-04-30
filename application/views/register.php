<?php $this->load->helper('form'); ?>
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
				<h5>Daftar ke Toko Kami!</h5>
				<hr>
			</center>
				<?php echo form_open('User/register'); ?>
				<form action="#" method="post">
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
							</div>
							<div class="col-md-1">
								Username
							</div>
							<div class="col-md-3">
								<input class="form-control1" type="text" name="username" id="username" width="150%">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-4">
							</div>
							<div class="col-md-1">
								Password
							</div>
							<div class="col-md-3">
								<input type="password" class="form-control1" name="password" id="password">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-4">
							</div>
							<div class="col-md-1">
								Email
							</div>
							<div class="col-md-3">
								<input class="form-control1" type="text" name="email" id="email" width="150%">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-4">
							</div>
							<div class="col-md-1">
								No. HP
							</div>
							<div class="col-md-3">
								<input class="form-control1" type="tel" name="hp" id="hp" width="150%">
							</div>
						</div>
						<br>
						
						<div class="row">
							<div class="col-md-4">
							</div>
							<div class="col-md-1">
								Alamat
							</div>
							<div class="col-md-3">
								<textarea class="form-control1" name="address" id="" cols="31" rows="5"></textarea>
								<!-- <input class="form-control1" type="" name="alamat" id="alamat" width="150%"> -->
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-6">
							</div>
							<div class="col-md-3">
								<button type="submit" class="btn btn-danger" style="width: 63%">Register</button>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
							</div>
							<div class="col-md-3 tanya">
								<a href="#">
									<small class="form-text">Sudah punya akun? Masuk Sekarang!</small>
								</a>
							</div>
						</div>
					</div>
				</form>
				<?php echo form_close(); ?>
		</div>
	</div>
</body>
</html>