<?php
require('connect.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'].'<br>';
	
	if(isset($_POST['update']))
	{
$uname=$_POST['uname'];
$name=$_POST['name'];
$pass=md5($_POST['pass']);
$email=$_POST['email'];
$mode = $_POST['mode'];
$updated = mysql_query("UPDATE users SET `user`= '$uname',name='$name' ,password='$pass' ,email = '$email', class = '$mode' WHERE id = '$id'") or die();	
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
<th><a href="admin_view.php"  style="text-decoration:none"><span style="color:blue";><h2>Client and admin view</h2></span></a></th>
<th><a href="new_entry.html"  style="text-decoration:none"><span style="color:blue";><h2>New Entry</h2></span></a></th>
<th><a href="medicine_view.php"  style="text-decoration:none"><span style="color:blue";><h2>medicine List</h2></span></a>
</th>
<th><a href="bill.php" style="text-decoration:none"><span style="color:blue";><h2>Selling Department</h2></span></a></th>

<th><a href="bill_data.php"  style="text-decoration:none"><span style="color:blue";><h2>BiLL Database</h2></span></a></th>
<th><a href="logout.php.php"  style="text-decoration:none"><span style="color:blue";><h2>LOgOUT</h2></span></a></th>
</tr>
</thead>
</table>
</div>
<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'].'<br>';
	 $sql="select * from users where `id`='$id'";
	$result=mysql_query($sql);
	while($row=mysql_fetch_assoc($result))
	{

?>
<form id="form" action="" method="POST">
<fieldset id="field">
<legend>registration form</legend>
<label for="uname">username</label><br>
<input type="text" id="uname" name="uname" size="20" placeholder="user name" value="<?php echo $row['user'];?>"/><br>
<label for="name">name</label><br>
<input type="text" id="name" name="name" size="20" placeholder="name" value="<?php echo $row['name'];?>"/><br>
<label for="email">email</label><br>
<input type="text" id="email" name="email" size="20" placeholder="email" value="<?php echo $row['email'];?>"/><br>
<label for="password">password</label><br>
<input type="password" id="pass" name="pass" size="20" placeholder="password" value="<?php echo $row['password'];?>"/><br>
<label for="user">user type [user/admin]</label><br>
<select id="mode" name="mode" value="<?php echo $row['class']; ?>">
<option value="user">user</option>
<option value="admin" >admin</option>
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