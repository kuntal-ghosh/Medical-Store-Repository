<?php
include('connect.php');
 $name=$_POST['name'];
 $category=$_POST['catagory'];
 $description=$_POST['description'];
 $company=$_POST['company'];
 $supply=$_POST['supply'];
 $quantity=$_POST['quantity'];
 $cost=$_POST['cost'];
 $supply_date=$_POST['date_supply'];
 $expire_date=$_POST['date_expiry'];
 $status=$_POST['status'];


if($_POST)
{
          $sql="INSERT INTO `stock`(`drug_name`, `category`, `description`, `company`, `supplier`, `quantity`, `cost`, `status`, `date_supplied`, `expiry_date`)
		  VALUES ('$name','$category','$description','$company','$supply','$quantity','$cost','$status','$supply_date','$expire_date')";
		 
		  $result= mysql_query($sql);
			if($result)
				header("location:index.php");
			else
		  die($sql."<br/><br/>".mysql_error());
		
		  }
       
?>