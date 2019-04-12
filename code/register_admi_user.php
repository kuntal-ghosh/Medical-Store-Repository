<html>
<head>
<style>
body{
	text-align:center;
	 background-image: url("im.PNG");
    font:black;
}
</style>
<title>
wed database lab
</title>
<link rel="stylesheet"  type="text/css" href="css/main.css">
<script type="text/javascript" src="r.validate.js">
<style>
body{
	text-align:center;
	 background-image: url("im.PNG");
    font:black;
}
</style>
</script>
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
<form id="myform" action="insert.regestration.php" method="POST" onsubmit="return regestervalidate();">
<fieldset id="field">
<legend>registration form</legend>
<label for="uname">username</label><br>
<input type="text" id="uname" name="uname" size="20" placeholder="user name" value="<?php if(isset($_POST['uname'])) echo $_POST['uname'];?>"/><br>
<label for="name">name</label><br>
<input type="text" id="name" name="name" size="20" placeholder="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>"/><br>
<label for="email">email</label><br>
<input type="text" id="email" name="email" size="20" placeholder="arnobaryan@gmail.com" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>"/><br>
<label for="email">password</label><br>
<input type="password" id="pass" name="pass" size="20" placeholder="password" value="<?php if(isset($_POST['pass']))  echo $_POST['pass'];?>"/><br>
<label for="email">confirm password</label><br>
<input type="password" id="cpass" name="cpass" size="20" placeholder="confirm password" value="<?php if(isset($_POST['cpass']))  echo $_POST['cpass'];?>"/><br>
<label for="user">user type [user/admin]</label><br>
<select id="mode" name="mode">
<option value="user">user</option>
<option value="admin" >admin</option>
</select>
<br>
<br>
<input type="submit"name="submit" value="register">
</fieldset>
</form>
</body>
</html>
