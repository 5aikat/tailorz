<?php
	session_start();
	require "config.php"; // Database Connection
		$ShpNm=$_POST['nameovt'];
		$PrpNm=$_POST['nameofpp'];
		$LcsnNo=$_POST['licenseno'];
		$LcsnDt=$_POST['validityperiod'];
		$LcsnAuth=$_POST['licensingauthority'];
		$phone=$_POST['mob1'];
		$email=$_POST['mail'];
		$km=$_POST['km'];
		$sdd=$_POST['sdd'];
		$day=$_POST['day'];
		$locid=$_POST['location'];
		$addr1=$_POST['addr1'];
		$landmark=$_POST['landmark'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$zip=$_POST['zip'];
		$LcsnDt = str_replace("/", "-", "$LcsnDt");
		$QueryDate = date("Y-m-d", strtotime($LcsnDt));
    
		
		
        try{       
				$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "insert vendors (VndrId,VndrTyp,ShpNm,PrpNm,Status,LcsnNo,LcsnDt,LcsnAuth)
					   values ('".$_SESSION['Vid']."','desgn','$ShpNm','$PrpNm','ACT','$LcsnNo','$QueryDate','$LcsnAuth')";
					   
					   
			  // use exec() because no results are returned
				$dbo->exec($sql);
				echo "New record created successfully";
				
						
				$sql1=$dbo->prepare("select * from VENDORS Where LcsnNo ='".$LcsnNo."'");
				$sql1->execute();
				$row=$sql1->fetch();
				
				//echo"Vendor Id: ".$row['VndrId'];
				 $id=$row['VndrId'];
				
				
				//Vendor Teritory
				$sql4 = "insert into vendortrt (vndrid,trtnbr,trtval) values ('$id',1,'$km')";
				$dbo->exec($sql4);
				
				$sql5 = "insert into vendortrt (vndrid,trtnbr,trtval) values ('$id',2,'$day')";
				$dbo->exec($sql5);
				
				$sql6 = "insert into vendortrt (vndrid,trtnbr,trtval) values ('$id',3,'$sdd')";
				$dbo->exec($sql6);
					
			    //ADDRESS
				
				$sql7 = "INSERT INTO ADDR (ID,ADDRCATEG,LOCID,ADDRLINE1,ZIP,CITY,STATE,CNTRY)
VALUES ('$id','Shop','$locid','$addr1','$zip','$city','$state','India')";
				$dbo->exec($sql7);
				header('location:price.php');

				
			}
		catch(PDOException $e)
			{
				echo $sql . "<br>" . $e->getMessage();
				$dbo=null;
				//header('location:vendregistration.php');

			}
$dbo=null;

?>