
<html>
<head>
<link rel="stylesheet" href="css/admin.css">
<style>
body{
	text-align:center;
	 background-image: url("im.PNG");
    font:black;
}
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
<form id="form" action="search_medicine_u.php" method="POST">
<input type="text" name="search_name" placeholder="input medicine name" size="80" id="text"><br/>
<select id="mode" name="mode" size="5" >
<option value="mname">medicine name</option>
<option value="mdes" >medicine description</option>
</select>
<br/>
<input type="submit" name="submit" size="40"value="search">
</form>
</body>
</html>