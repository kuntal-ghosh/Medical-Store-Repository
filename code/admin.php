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
<div align="center">
<?php
@session_start();
echo '<h2>'.'Welcome'.'   '.$_SESSION['name'].'</h2>';
echo '<a id="log" href="logout.php"><h2>Log out</h2> </a>'.'<br>';
echo '<a id="client_db" href="admin_view.php"><h2>client and admin list</h2> </a>';
echo '<a id="new_entry" href="new_entry.html"><h2>New entry</h2></a>' ;
echo '<a id="medicine_db" href="medicine_view.php"><h2>Medicine List</h2></a>' ;
echo '<a id="sell" href="bill.php"><h2>Selling Department</h2> </a>';
echo '<a id="Bill" href="bill_data.php"><h2>Bill Database</h2> </a>';

?>
</div>
</body>
</html>