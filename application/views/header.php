<!-- <?php 
// var_dump($_SESSION['username']);
// die(); 
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body style="background-color: #f5f5f5">
	<!-- header logo + search -->
	<nav class="navbar navbar-default" style="background-color: #d69cb0;">
		
		<div class="container-fluid" style="padding-left: 25px;">
			<a href="<?php echo base_url(); ?>index.php/home" class="navbar-brand" style="color: #c83349;">
				<img src="<?php echo base_url(); ?>assets/img/logo.jpg" width="60" height="60" class="d-inline-block align-center" alt="">
				MAKEUPBLISS.ID
			</a>
			<form class="form-inline">
		    	<input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
		    	<button class="btn btn-outline-light" type="button">Search</button>
			</form>
		</div>
	</nav>
	

	 <!-- navbar -->
	<nav class=" ?>navbar navbar-collapse" style="background-color: #F8BBD0;">
			<div class="row">
				<div class="col-md-3">
					<ul class="navmainlist" >
						  <li class="navlist"><a href="<?php echo base_url(); ?>index.php/home">Home</a></li>
						  <li class="navlist"><a href="#">About</a></li>
					</ul>
				</div>
				<div class="col-md-5"></div>
		<?php if (isset($_SESSION['username'])): ?>
				<div class="col-md-4">
						
					<ul class="navmainlist" style="float: right;">
						<li class="navlistright"><a href="#"><?php echo $_SESSION['username']; ?></a></li>
						<li class="navlistright">
							<a href="<?php echo base_url(); ?>index.php/logout">
								
								<button type="submit" class="btn btn-danger">
									Logout
								</button>
							</a>
						</li>
						<?php if ($_SESSION['username'] == 'admin') : ?>
							<li class="navlistright">
							<a href="<?php echo base_url('index.php/admin'); ?>">
								Admin Page
							</a>
						</li>	
						<?php else: ?>
						<li class="navlistright">
							<a href="<?php echo base_url('index.php/cart/'.$_SESSION['id_user']); ?>">
								Cart
							</a>
						</li>
					<?php endif ?>
					</ul>
				</div>
		<?php else: ?>
				<div class="col-md-4">
					<ul class="navmainlist" >
						<li class="navlistright"><a href="<?php echo base_url(); ?>index.php/register">Register</a></li>
						<li class="navlistright"><a href="<?php echo base_url(); ?>index.php/login">Login</a></li>
					</ul>
					
				</div>
		<?php endif ?>
			</div>
	
	</nav>

	<br>
</body>
</html>