<!DOCTYPE html>
<html lang="en">
    <head>
	<style>

body{
	text-align:center;
	 background-image: url("im.PNG");
    font:black;
}

</style>
        <meta charset="utf-8" />
        <title></title>
		<script type="text/javascript">  
	function	loginvalidate()
		{
			var name=document.getElementById("Name");
			var pass=document.getElementById("password");
			if(name.value=="")
			{
				window.alert("user name required");
				name.focus();
				return false;
			}
			if(pass.value=="")
			{
				window.alert("password  required");
				pass.focus();

				return false;
			}
			return true;
		}
		</script>
		<link rel="stylesheet" href="css/log.css" type="text/css">
    </head>
    <body>
	<div id="f">
	<fieldset id="field">
	<legend><h2>USER LOGIN</h2></legend>
        <form name="form" action="index.php" method="post" target="" id="form" onsubmit="return loginvalidate();">
		
		
            <p>
            <label for="Name">Name</label> <br>
   <input type="text" name="Name" id="Name" value="<?php if(isset($_POST['Name'])) echo $_POST['Name']; ?>" />            </p>
            <p><?php if(isset($errors['Name1'])) echo $errors['Name1']; ?></p>   <!-- output errors if error occurs -->
            <p><?php if(isset($errors['Name2'])) echo $errors['Name2']; ?></p>
            
            <p>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" />
            </p>
            <p><?php if(isset($errors['password1'])) echo $errors['password1']; ?></p>
            <p><?php if(isset($errors['password2'])) echo $errors['password2']; ?></p>

            <input type="submit" value="Submit" /><br>
			
        </form>
		<label>If not registered???</label>
		<a id="register" href="register_user.php">Register</a>
		</fieldset>
		</div>
    </body>
</html>