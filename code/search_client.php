<?php
require("connect.php");
if(isset($_POST['search_name']))
{
	$search_name=$_POST['search_name'];
if(!empty($search_name))
{
	$sql="SELECT DISTINCT * FROM `users` WHERE `name` LIKE '".$search_name."%'";
$result=mysql_query($sql);

$nrow=@mysql_num_rows($result);
if($nrow>=1)
{
	?>
	<div id="table">
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
	{
		?>	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['user']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['password']; ?></td>
		<td><?php  echo $row['email']; ?></td>
		<td><?php echo $row['class']; ?></td>
		<td><a href="update.php?id=<?php echo $row['id'];?>">update</a></td>
<?php
}
}
else
{
	echo '<br>'."not found";
}
}
}
?>
</tr>
</table>
</div>

<!--<form action="search.php" method="POST">
NAME:<input type="text" name="search_name"> <input type="submit" value="search">
</form>