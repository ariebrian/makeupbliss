<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	
</head>
<body style="background-color: #f5f5f5"> 
	<!-- isi -->
	<div class="container">
		<div class="jumbotron" style="background-color: #F8BBD0;">
			<center>
				<h5>Masuk ke Toko Kami!</h5>
				<hr>
			</center>
				<?php echo form_open('User/login'); ?>
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
							<div class="col-md-6">
							</div>
							<div class="col-md-3">
								<button type="submit" class="btn btn-danger" style="width: 63%">Log In</button>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
							</div>
							<div class="col-md-3 tanya">
								<a href="#">	
									<small class="form-text">Lupa Password?</small>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
							</div>
							<div class="col-md-3 tanya">
								<a href="#">
									<small class="form-text">Belum punya akun? Daftar Sekarang!</small>
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