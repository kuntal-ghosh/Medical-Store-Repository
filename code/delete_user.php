<?php
require('connect.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'].'<br>';
	$sql="DELETE FROM `users` WHERE `id`='$id'";
	$result= mysql_query($sql);
	if($result)
	header("location:admin_view.php");
	else
	die($sql."<br/><br/>".mysql_error());
		
		  }
       
?>