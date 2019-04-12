<html>
<head>
<style>
body{
	text-align:center;
	 background-image: url("im.PNG");
    font:black;
}
</style>
</head>
</html>
<h1>Wellcome To Live-Life Medical Store</h1>
<div class="design">
<table border="0" class="info" style width="100%">
<thead>
<tr>
<th><a href="admin.php"  style="text-decoration:none"><span style="color:blue";><h2>admin home</h2></span></a></th>
<th><a href="admin_view.php"  style="text-decoration:none"><span style="color:blue";><h2>Client and admin view</h2></span></a></th>
<th><a href="new_entry.html"  style="text-decoration:none"><span style="color:blue";><h2>New Entry</h2></span></a></th>
<th><a href="medicine_view.php"  style="text-decoration:none"><span style="color:blue";><h2>medicine List</h2></span></a>
</th>
<th><a href="bill.php" style="text-decoration:none"><span style="color:blue";><h2>Selling Department</h2></span></a></th>

<th><a href="bill_data.php"  style="text-decoration:none"><span style="color:blue";><h2>BiLL Database</h2></span></a></th>
<th><a href="logout.php"  style="text-decoration:none"><span style="color:blue";><h2>LOgOUT</h2></span></a></th>
</tr>
</thead>
</table>
</div>
<?php
require('connect.php');
if(isset($_GET['id']))
{
include("quantity_ui.html");

if(!empty($qn) && !empty($cname))
{
	$id=$_GET['id'].'<br>';
		
	$sql1="select * from stock where `stock_id`='$id'";
$re1=mysql_query($sql1);

$row1=mysql_fetch_assoc($re1);

 $name=$row1['drug_name'];
 $qan=$qn;
$cost=$row1['cost'];
 $total=$row1['cost']*$qn;

	$sql2="INSERT INTO `bill`
	(`customer_name`,`medicine_name`, `medicine_id`, `quantity`, `unit_price`, `total_price`, `selling_time`) VALUES 
	('$cname','$name','$id','$qan','$cost','$total',now())";
	$re2=mysql_query($sql2);
	session_start();
	$_SESSION['cname'] =$cname;
	$_SESSION['quantity']=$qan;
	$_SESSION['id']=$id;
	header("location:add_more.php");
}
}
else
	header('location:bill.php');

?>
