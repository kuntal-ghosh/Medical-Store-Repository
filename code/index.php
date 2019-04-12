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

</body>
</html>
<?php

	require('core.php');
	include('login.php');
	if(loggedin())
	{
		if($_SESSION['class']=='admin')
	{
		
	include('admin.php');
		}
		if($_SESSION['class']=='user')
{
include('user.php');
}
	
	}
	else
	include('login_ui.php');
	
    
	
	
   ?>