<?php

	require "config.php"; // Database Connection
	$name=$_POST['name'];
	$pass=$_POST['password'];
	
	
	try{       
				$sql1=$dbo->prepare("SELECT * FROM user WHERE username = '". mysqli_real_escape_string($user) ."' AND pass = '". mysqli_real_escape_string($pass) ."'") ;
				$sql1->execute();
				$row=$sql1->fetch();
				if (mysqli_num_rows($row) == 1) {
						session_start();
						$_SESSION['user']=$email;
						$_SESSION['name']=$name;
					
				header('location:index.php');
} else {
	header('location:customerlogin.php');
}
				

	}
	catch(PDOException $e)
			{
				echo $sql . "<br>" . $e->getMessage();
				$dbo=null;
				header('location:customerlogin.php');

			}
$dbo=null;
				
?>