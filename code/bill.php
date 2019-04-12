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
<?php

require('connect.php');
include("bill_search_medicine_ui.php");

?>