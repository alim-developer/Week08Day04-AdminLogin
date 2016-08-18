<?php
 	 
	if(isset($_POST['submitcon'])){
		session_start();
		$login = $_POST['login'];
		$password = $_POST['password'];
		
		if(!empty($login) && !empty($password)){

			if($login == "admin@code.edu.az" && $password == "123456"){
				$_SESSION['admin'] = true;
				header('Location:admin.php');
				
			}else{
				header('Location:index.php');
				$_SESSION['error']='Belə bir admin və ya user yoxdur';
			}
			
		}else{
			header('Location:index.php');
			$_SESSION['error']='Xanaları doldurun';
		}
	}


	// Index fayldaki urlden check yazib girilmemesi ucun yazilan kodun ardi
	if($_SESSION['check'] !== true){
		header('Location: index.php');
		unset($_SESSION['check']);
	}

?>