<?php
require("connect.php");
if(isset($_POST['password']) && isset($_POST['Name']))
{
	 $username=$_POST['Name'];
 $password=$_POST['password'];
 $upassword=md5($password);
if(!empty($username) && !empty($upassword))
{
@$sql="select `id`,`class`,`name` FROM `users` WHERE `user`='$username' and `password`='$upassword'";
$result=mysql_query($sql);
if($result)
{
	$rows=mysql_num_rows($result);
	if($rows==1)
	{
	$user_id=mysql_result($result,0,'id') ;
	$class=mysql_result($result,0,'class') ;
	$name=mysql_result($result,0,'name') ;
	$_SESSION['user_id']=$user_id;
	$_SESSION['class']=$class;
	$_SESSION['name']=$name;
	header('index.php');
	}
	else 
	{	
	$result = '<div style="text-align:center; color:red ">incorrect username password</div>';
	echo '<br>'.$result;
	//include('login_ui.php');
	
}
}
else
{
	die($sql."<br/><br/>".mysql_error());
}
}

}
?>