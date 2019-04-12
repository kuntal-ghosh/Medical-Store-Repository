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
require('connect.php');
session_start();
$id=$_SESSION['user_id'];
$sql="select * from `users` WHERE `id`='$id'";
$result=mysql_query($sql);
$nrow=mysql_num_rows($result);?>
<div align="center">
<table border="1px" width="70%">
		<tr>
		<th>id</th>
		<th>user name</th>
		<th>name</th>
		<th>password</th>
		<th>email</th>
		<th>user_class</th>
		<th>update</th>
		
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
		<td><a href="u_update.php?id=<?php echo $row['id'];?>">update</a></td>
		
<?php
	}?>
</tr>
</table>
</div>


</html>