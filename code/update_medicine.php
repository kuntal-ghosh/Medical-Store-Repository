<?php
require('connect.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'].'<br>';
	
	if(isset($_POST['update']))
	{
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
 
  
 
$updated =" UPDATE `stock` SET `drug_name`='$name',`category`='category',`description`='description',
`company`=$company,`supplier`='$supply',`quantity`='$quantity',`cost`='$cost',`status`='$status',
`date_supplied`='$supply_date',`expiry_date`='expire_date' WHERE `stock_id`=$id or die()";	
if($updated)
{
	header('location:admin.php');
}
}
	
}

?>
<html>
<head>
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
	 $sql="select * from stock where `stock_id`='$id'";
	$result=mysql_query($sql);
	while($row=mysql_fetch_assoc($result))
	{

?>
<form id="myform" action="insert_medicine.php" method="POST" ">
<fieldset id="field">
<legend>Medicine Information</legend>
<label for="name">Medicine name</label><br>
<input type="text" id="name" name="name" size="20" placeholder="name" value="<?php echo $row['drug_name'];?>"/><br>

<label for="category">Category</label><br>
<input type="text" id="catagory" name="catagory" size="20" placeholder="catagory" value="<?php  echo $row['category'];?>"/><br>

<label for="description">Description</label><br>
<input type="text" id="description" name="description" size="20" placeholder="Description" value="<?php  echo $row['description'];?>"/><br>
<label for="company">Company</label><br>
<input type="text" id="company" name="company" size="20" placeholder="Company" value="<?php echo $row['company'];?>"/><br>
<label for="supply">Supplyer</label><br>
<input type="text" id="text" name="supply" size="20" placeholder="Supplyer" value="<?php echo $row['supplier'];?>"/><br>

<label for="quantity">Quantity</label><br>
<input type="number" id="quantity" name="quantity" size="20" placeholder="quantity" value="<?php  echo $row['quantity'];?>"/><br>

<label for="cost">Cost</label><br>
<input type="number" id="cost" name="cost" size="20" placeholder="cost" value="<?php echo $row['cost'];?>"/><br>


<label for="date_supply">Supply Date</label><br>
<input type="text" id="date_supply" name="date_supply" size="20"  value="<?php  echo $row['date_supplied'];?>"/><br>

<label for="date_expiry">Expire Date</label><br>
<input type="text" id="date_expiry" name="date_expiry" size="20" value="<?php  echo $row['expiry_date'];?>"/><br>

<label for="status">Status</label><br>
<select id="status" name="status" value="<?php echo $row['status'];?>">
<option value="available">Available</option>
<option value="inavailable" >Inavailable</option>
</select>
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