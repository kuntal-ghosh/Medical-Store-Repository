<?php
include('connect.php');
$uname=$_POST['uname'];
$name=$_POST['name'];
$pass=md5($_POST['pass']);
$cpass=$_POST['cpass'];
$email=$_POST['email'];
$mode = $_POST['mode'];



if($_POST)
{
          $sql="INSERT INTO `users`(`user`, `name`, `password`, `email` , `class`) VALUES ('$uname','$name','$pass','$email','$mode')";
		 
		  $result= mysql_query($sql);
			if($result)
				header("location:index.php");
			else
		  die($sql."<br/><br/>".mysql_error());
		
		  }
       
?>