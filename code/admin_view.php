<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/admin.css">
<style>

body{
	text-align:center;
	 background-image: url("im.PNG");
    font:black;
}
</style>
</head>
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
include("search_client_ui.html");
echo "<br>";
require('connect.php');
require('core.php');
$sql="select * from `users`";
$result=mysql_query($sql);
$nrow=mysql_num_rows($result);?>

<div align="center">
<table border="1px" width="100%">
		<tr>
		<th>id</th>
		<th>user name</th>
		<th>name</th>
		<th>password</th>
		<th>email</th>
		<th>user_class</th>
		<th>update</th>
		<th>delete</th>
		</tr>
	<?php while($row=mysql_fetch_assoc($result))
	{ ?>
		<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['user']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['password']; ?></td>
		<td><?php  echo $row['email']; ?></td>
		<td><?php echo $row['class']; ?></td>
		<td><a href="update.php?id=<?php echo $row['id'];?>">update</a></td>
		<td><a href="delete_user.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you wish to delete this Record?');">
          <span class="delete" title="Delete"> Delete</span></a>
<?php
	}?>
</tr>
</table>
</div>


</html>