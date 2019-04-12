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
if(isset($_GET['id']))
{
	$id=$_GET['id'].'<br>';
	
	if(isset($_POST['update']))
	{
$cname=$_POST['cname'];
$mname=$_POST['mname'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$total = $quantity*$price;
$stime = $_POST['stime'];

$updated = mysql_query("UPDATE `bill` SET `customer_name`='$cname',`medicine_name`='$mname',`quantity`='$quantity',`unit_price`='$price',`total_price`='$total',`selling_time`='$stime' WHERE `id`='$id'") or die();	
if($updated)
{
	header('location:admin.php');
}
}
	
}
?>
<html>
<head>
<style>

body{
	text-align:center;
	 background-image: url("im.PNG");
    font:black;
}
</style>
<title>
wed database lab
</title>
<link rel="stylesheet" href="main.css">
</head>
<body>
<?php

if(isset($_GET['id']))
{
	$id=$_GET['id'].'<br>';
	 $sql="select * from bill where `id`='$id'";
	$result=mysql_query($sql);
	while($row=mysql_fetch_assoc($result))
	{

?>
<form id="form" action="" method="POST">
<fieldset id="field">
<legend>bill update form</legend>
<h2>customer name<h2><input type="text" id="cname" name="cname" width="20" size="40" placeholder="user name" value="<?php echo $row['customer_name']; ?>"/><br>
<h2>medicine name<h2><input type="text" id="mname" name="mname"  width="10" size="40" placeholder="user name" value="<?php echo $row['medicine_name']; ?> "/><br>
<h2>quantity<h2><input type="text" id="cname" name="quantity"  width="10" size="40" placeholder="user name" value=" <?php echo $row['quantity']; ?>"/><br>
<h2>Unit price<h2><input type="text" id="cname" name="price"  width="10" size="40" placeholder="user name" value="<?php echo $row['unit_price']; ?>"/><br>
<h2>Total<h2><input type="text" id="cname" name="total"  width="10" size="40" placeholder="user name" value="<?php echo $row['total_price']; ?>"/><br>
<h2>Selling time<h2><input type="date" id="cname" name="stime"  width="10" size="40" placeholder="user name" value="<?php echo $row['selling_time']; ?>"/><br>

<br>
<br>
<input type="submit"name="update" value="update">
</fieldset>
</form>
<?php
	}
}
?>
</body>
</html>