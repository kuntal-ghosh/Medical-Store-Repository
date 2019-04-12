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
<body>
<div align="center">
<?php
@session_start();
echo '<h2>'.'welcome'.'   '.$_SESSION['name'].'</h2>'.'<br>'.'<h2>'.'<a id="log" href="logout.php">Log out </a>'.'</h2>'.'<br>';
?>
<a href="user_update.php?id=<?php echo $_SESSION['id'];?>"><h2>View my info</h2></a>
<a href="search_medicine_user.php?"><h2>Search Medicine</h2></a>
</div>
</body>
</html>