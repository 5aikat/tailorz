<?php
session_start();
require "config.php";


$vid = $_SESSION['vid'];
$_SESSION['user'] = "U00007";       
		
		$sql1=$dbo->prepare("select ShpNm from VENDORS Where VndrId ='".$vid."'");
		$sql1->execute();
		$row=$sql1->fetch();
		
		$sql11=$dbo->prepare("select userid from user Where email ='".$_SESSION['user']."'");
		$sql11->execute();
		$row11=$sql11->fetch();
		
		
		$sql2=$dbo->prepare("select * from loc where locid = (SELECT locid FROM `addr` WHERE id='".$vid."' limit 1)");
		$sql2->execute();
		$row1=$sql2->fetch();
		
		$sql3=$dbo->prepare("select * from addr Where Id ='".$vid."'");
		$sql3->execute();
		$row2=$sql3->fetch();
		
		$sql4=$dbo->prepare("SELECT * FROM `vendortrt` WHERE VndrId='".$vid."' AND TrtNbr=1");
		$sql4->execute();
		$row3=$sql4->fetch();
		
		$sql5=$dbo->prepare("SELECT * FROM `vendortrt` WHERE VndrId='".$vid."' AND TrtNbr=3");
		$sql5->execute();
		$row4=$sql5->fetch();
		
		$sql6=$dbo->prepare("SELECT * FROM `email` WHERE Id='".$vid."'");
		$sql6->execute();
		$row5=$sql6->fetch();
		
		$sql7=$dbo->prepare("SELECT phone FROM `phone` WHERE Id='".$vid."'");
		$sql7->execute();
		$row6=$sql7->fetch();
		
		
		
		$sql8=$dbo->prepare("SELECT * FROM `vendortrt` WHERE VndrId='".$vid."' AND TrtNbr=2");
		$sql8->execute();
		$row7=$sql7->fetch();
		
		

		
		
$shopName = $row['ShpNm'];
$vContact = $row6['phone'];
$uid = $row11['userid'];

if($_POST['submit']){
$cfname = $_POST['customer-name-first'];
$caddress = $_POST['customer-address'];
$clandmark = $_POST['customer-landmark'];
$cemail = $_POST['customer-email'];
$cphone = $_POST['customer-phone'];
$pickupdate = $_POST['pickupdate'];
$pickuptime = $_POST['pickuptime'];
$deliverydate= $_POST['deliverydate'];
$deliverytime = $_POST['deliverytime'];
$cmeasurementtype = $_POST['measurement-type'];
$total = $_POST['totalValue'];



	      
				$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql ="INSERT INTO `orders`(`customerID`, `vendorID`, `shopName`, `vendorContact`, `shippingAddress`, `pickUpDate`, `pickUpTime`, `delieveryDate`, `delieveryTime`, `measurementType`, `userPhone`, `total`, `orderStatus`, `customerName`, `email`) 
VALUES ('.$uid.','.$vid.','.$shopName.','.$vContact.','.$caddress.','.$pickupdate.','.$pickuptime.','.$deliverydate.','.$deliverytime.','.$cmeasurementtype.','.$cphone.','.$total.',0,'.$cfname.','.$cemail.')";
				$statement = $dbo->prepare($sql);
				$statement->execute();
				
				
			
				$order_id =(string) $dbo->lastInsertId();	
					
				echo "New record created successfully and order ID is " .$order_id;	
				if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
								{
									$total =0;
									$b = 0;
									foreach ($_SESSION["cart_products"] as $cart_itm)
									{
										$product_qty = $cart_itm["product_qty"];
										$product_name = $cart_itm["product_name"];
										$product_price = $cart_itm["product_price"];
										$product_code = $cart_itm["product_code"];
										$subtotal = ($product_price * $product_qty);
										$total = ($total + $subtotal);
										$sql5 = "INSERT INTO `orderdetail`(`orderID`, `productDesc`, `unitPrice`, `quantity`, `productID`, `vendorID`) VALUES ('.$order_id.','.$product_name.','.$product_price.','.$product_qty.','.$product_code.','.$vid.')";
										$statement1 = $dbo->prepare($sql5);
										$statement1 -> execute();
									}
								}

							$_SESSION['orderID'] = $order_id;


}

header('Location:'.'thanks.php');
?>