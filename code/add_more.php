<html>
<head>
<style>

body{
	text-align:center;
	 background-image: url("im.PNG");
    font:black;
	position absolute;
	left:30px;
}

</style>
</head>
<body>
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
session_start();
 $cname=$_SESSION['cname'] ;

$sql="SELECT DISTINCT  `customer_name`,`medicine_id`,`medicine_name`, `quantity`, `unit_price`, `total_price`,`selling_time` FROM `bill` WHERE `customer_name`='$cname'";
	
	$result=mysql_query($sql);
	
 $nrow=mysql_num_rows($result);
if($nrow>=1)
{
	?>
<div id="table">
	<table border="1px" width="100%">
		<tr>
		<th>customer name</th>
		<th>medicine id</th>
		<th>name</th>
		<th>quantity</th>
		<th>unit price</th>
		<th>total price</th>
		<th>Selling Time</th>
		</tr>
	<?php while($row=mysql_fetch_assoc($result))
	{
		 $_SESSION['cname']=$row['customer_name'];;
		?>	<tr>
		<td><?php echo $row['customer_name']; ?></td>
		<td><?php echo $row['medicine_id']; ?></td>
		<td><?php echo $row['medicine_name']; ?></td>
		<td><?php echo $row['quantity']; ?></td>
		<td><?php echo $row['unit_price']; ?></td>
		<td><?php echo $row['total_price']; ?></td>
		<td><?php echo $row['selling_time']; ?></td>
		</tr>
		<?php
	 }
	
		?>
	</table>
</div>	
<?php
}
echo "<br>";
include("add_more2.php");
?>
<a href="bill_report.php"><input type="submit" value="Bill report"></a>
</body>
</html>