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
</script>
</head>
<body>
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
</select>
<br>
<br>
<input type="submit"name="submit" value="register">
</fieldset>
</form>
</body>
</html>
