<?php
	session_start();

	require "config.php"; // Database Connection
	$Name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone= $_POST['phone'];
	
	if(isset($_POST['submit'])){
	try{       
				$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "insert email (Id,Email,password,name)
					   select 
					   (SELECT CONCAT('V',lpad(max(substr(Id,2))+1,5,0)) FROM email) 
					   ,'$email','$password','$Name'
					   from dual;";
				// use exec() because no results are returned
				$dbo->exec($sql);
				echo "New record created successfully";
				
					$sql1=$dbo->prepare("SELECT * FROM `email` WHERE Email='".$email."' AND password='".$password."'");
					$sql1->execute();
					$row1=$sql1->fetch();
					
				echo $row1['Id'];
					$_SESSION['user']=$email;
					$_SESSION['pass']=$password;
					$_SESSION['name']=$Name;
					$_SESSION['Vid']=$row1['Id'];
			
				
					$sql3 = "insert into phone (Id, PhoneCateg,Phone)
						    Values ('".$_SESSION['Vid']."','MOB1','$phone')";
							
				$dbo->exec($sql3);
				
					
					
				header('location:tailordetail.php');

	}
	catch(PDOException $e)
			{
				echo $sql . "<br>" . $e->getMessage();
				$dbo=null;
				//header('location:.');

			}
	
$dbo=null;
	}			
?>