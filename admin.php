	
	<?php
		session_start();
			if($_SESSION['admin'] !== true){
				header('Location:index.php');
			}
			

			if(isset($_POST['button'])){
				header('Location:logout.php');
			}
			
		?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		body, html{
			margin:0;
			padding: 0;
		}

		.main{
			width: 960px;
			text-align: center;
			margin:0 auto;
		}

		.main h1{
			font-family: Tahoma;
			margin-top: 50px;
			font-weight: normal;
		}
		.main button{
			background-color: lightblue;
			border: none;
			border-radius: 3px;
			cursor: pointer;
			color:  white;
			padding: 7px 35px
		}

		
	</style>

		
	
</head>
<body>

	<div class="main">
		<h1>Səhivəyə xoş gəlmisiniz Admin</h1>
		<form action="admin.php" method="POST">
			<button name="button">Log out</button>
		</form>
	</div>
</body>
</html>