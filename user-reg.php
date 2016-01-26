<?php
	session_start();

	require "config.php"; // Database Connection
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone= $_POST['phone'];
	
	
	try{       
				$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "insert user (userid,email,pass,uname,mob)
					   select 
					   (SELECT CONCAT('U',lpad(max(substr(userid,2))+1,5,0)) FROM user) 
					   ,'$email','$password','$name','$phone'
					   from dual;";
					   
			  // use exec() because no results are returned
				$dbo->exec($sql);
				echo "New record created successfully";
					$_SESSION['user']=$email;
					$_SESSION['name']=$name;
					
				header('location:index.php');

	}
	catch(PDOException $e)
			{
				echo $sql . "<br>" . $e->getMessage();
				$dbo=null;
				header('location:customerlogin.html');

			}
$dbo=null;
				
?>