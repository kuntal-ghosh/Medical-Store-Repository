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
Medicine Information.
</title>
<link rel="stylesheet"  type="text/css" href="css/main.css">
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
<form id="myform" action="insert_medicine.php" method="POST" ">
<fieldset id="field">
<legend>Medicine Information</legend>
<label for="name">Medicine name</label><br>
<input type="text" id="name" name="name" size="20" placeholder="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>"/><br>

<label for="category">Category</label><br>
<input type="text" id="catagory" name="catagory" size="20" placeholder="catagory" value="<?php if(isset($_POST['catagory'])) echo $_POST['catagory'];?>"/><br>

<label for="description">Description</label><br>
<input type="text" id="description" name="description" size="20" placeholder="Description" value="<?php if(isset($_POST['description']))  echo $_POST['description'];?>"/><br>
<label for="company">Company</label><br>
<input type="text" id="company" name="company" size="20" placeholder="Company" value="<?php if(isset($_POST['company']))  echo $_POST['company'];?>"/><br>
<label for="supply">Supplyer</label><br>
<input type="text" id="text" name="supply" size="20" placeholder="Supplyer" value="<?php if(isset($_POST['supply']))  echo $_POST['supply'];?>"/><br>

<label for="quantity">Quantity</label><br>
<input type="number" id="quantity" name="quantity" size="20" placeholder="quantity" value="<?php if(isset($_POST['quantity']))  echo $_POST['quantity'];?>"/><br>

<label for="cost">Cost</label><br>
<input type="number" id="cost" name="cost" size="20" placeholder="cost" value="<?php if(isset($_POST['cost']))  echo $_POST['cost'];?>"/><br>


<label for="date_supply">Supply Date</label><br>
<input type="date" id="date_supply" name="date_supply" size="20"  value="<?php if(isset($_POST['date_supply']))  echo $_POST['date_supply'];?>"/><br>

<label for="date_expiry">Expire Date</label><br>
<input type="date" id="date_expiry" name="date_expiry" size="20" value="<?php if(isset($_POST['date_expire']))  echo $_POST['date_expire'];?>"/><br>

<label for="status">Status</label><br>
<select id="status" name="status">
<option value="available">Available</option>
<option value="inavailable" >Inavailable</option>
</select>
<br>
<br>
<input type="submit"name="submit" value="insert">
</fieldset>
</form>
</body>
</html>
