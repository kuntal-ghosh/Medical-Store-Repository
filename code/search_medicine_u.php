<html>
<head>
<link rel="stylesheet" href="css/admin.css">
<style>
body{
	text-align:center;
	 background-image: url("im.PNG");
    font:black;
}
body{
	text-align:center;
	 background-image: url("im.PNG");
    font:black;
}
</style>
</head>
<body>
<h1>Wellcome To Live-Life Medical Store</h1>
<div class="design">
<table border="0" class="info" style width="100%">
<thead>
<tr>
<th><a href="user.php"  style="text-decoration:none"><span style="color:blue";><h2> home</h2></span></a></th>
<th><a href="user_update.php"  style="text-decoration:none"><span style="color:blue";><h2>view my info</h2></span></a></th>
<th><a href="search_medicine_user.php"  style="text-decoration:none"><span style="color:blue";><h2>search medicine</h2></span></a></th>
<th><a href="logout.php"  style="text-decoration:none"><span style="color:blue";><h2>LOgOUT</h2></span></a></th>
</tr>
</thead>
</table>
</div>
<?php
require("connect.php");
if(isset($_POST['search_name']))
{
	$search_name=$_POST['search_name'];
if(!empty($search_name))
{
	if(@$_POST['mode']=='mdes')
		
		{
		$sql="SELECT DISTINCT * FROM `stock` WHERE `description` LIKE '%".$search_name."%'";
$result=mysql_query($sql);

$nrow=@mysql_num_rows($result);
if($nrow>=1)
{
	?>
	<div id="table">
	<table border="1px" width="100%">
		<tr>
		<th>id</th>
		<th>name</th>
		<th>category</th>
		<th>description</th>
		<th>Cost</th>
		<th>status</th>
		</tr>
	<?php while($row=mysql_fetch_assoc($result))
	{
		?>	<tr>
		<td><?php echo $row['stock_id']; ?></td>
		<td><?php echo $row['drug_name']; ?></td>
		<td><?php echo $row['category']; ?></td>
		<td><?php echo $row['description']; ?></td>
		<td><?php echo $row['cost']; ?></td>
		<td><?php echo $row['status']; ?></td>
<?php
}
}
else
{
	
	include('search_medicine_user.php');
	echo "not found";
}

?>
</tr>
</table>
</div>	
<?php			
		}
	elseif(@$_POST['mode']=='mname')
	{
	$sql="SELECT DISTINCT * FROM `stock` WHERE `drug_name` LIKE '".$search_name."%'";
$result=mysql_query($sql);

$nrow=@mysql_num_rows($result);
if($nrow>=1)
{
	?>
	<div id="table">
	<table border="1px" width="100%">
		<tr>
		<th>id</th>
		<th>name</th>
		<th>category</th>
		<th>description</th>
		<th>Cost</th>
		<th>status</th>
		</tr>
	<?php while($row=mysql_fetch_assoc($result))
	{
		?>	<tr>
		<td><?php echo $row['stock_id']; ?></td>
		<td><?php echo $row['drug_name']; ?></td>
		<td><?php echo $row['category']; ?></td>
		<td><?php echo $row['description']; ?></td>
		<td><?php echo $row['cost']; ?></td>
		<td><?php echo $row['status']; ?></td>
<?php
}
}
else
{
	
	include('search_medicine_user.php');
	echo "not found";
}
?>
</tr>
</table>
</div>
<?php
	}
else
{
	
	include('search_medicine_user.php');
	echo "not found";
}
}
}
else
{
	
	include('search_medicine_user.php');
	echo "not found";
}
?>