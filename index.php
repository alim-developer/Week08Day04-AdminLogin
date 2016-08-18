		

	<!-- Bu hissede urlden check.php ye girmesinin qarsini almaq ucun bunu yazdim. Ardi check.php faylindadi... -->
	<?php
		session_start();
			$_SESSION['check'] = true;
	?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
	<div class="main">
		<div class="login">
			<div class="image">
				
				<img src="image/no-image.png">
				
			</div>
			<div class="text">
				<h5>Admin Login</h5>
				<p>Sign in to your account</p>
				<form action="check.php" method="post">
					<input type="text" name="login" placeholder="Email Address">
					<input type="password" name="password" placeholder="Password">
					<button  name="submitcon" >Sign in</button>
				</form>
				<?php 
					if(isset($_SESSION['error'])){  ?>
						<p style="color: red;"><?=$_SESSION['error']?></p>
				<?php
					unset($_SESSION['error']);
					}?>
				





			</div>
		</div>
		<div class="copyRight">
			<p>&copy Code Acamey 2016. All rights reserved.</p>
		</div>
	</div>

	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>