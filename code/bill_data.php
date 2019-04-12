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
$sql="SELECT  * FROM `bill`";
	
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
		<th>update</th>
		<th>delete</th
		</tr>
	<?php while($row=mysql_fetch_assoc($result))
	{
		?>	<tr>
		<td><?php echo $row['customer_name']; ?></td>
		<td><?php echo $row['medicine_id']; ?></td>
		<td><?php echo $row['medicine_name']; ?></td>
		<td><?php echo $row['quantity']; ?></td>
		<td><?php echo $row['unit_price']; ?></td>
		<td><?php echo $row['total_price']; ?></td>
		<td><?php echo $row['selling_time']; ?></td>
		<td><a href="update_bill.php?id=<?php echo $row['id'];?>">update</a></td>
		<td><a href="delete_bill.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you wish to delete this Record?');">
          <span class="delete" title="Delete"> Delete</span></a>
		</tr>
		<?php
	 }
		?>
	</table>
</div>	
<?php
}
?>
</body>
</html>