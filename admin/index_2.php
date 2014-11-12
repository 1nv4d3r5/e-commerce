<?php 
require('../includes/config.php');

loginRequired();

if($_GET['action'] === "logout")
{
	userLogout();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<?php include_once('../includes/header.php'); ?>
<?php include_once('../includes/sidebar.php'); ?>
<title>Admin Panel | <?php echo SITETITLE; ?></title>
</head>
<body>
<div id="wrapper">
<div id="log"><a href="<?php echo PATHADMIN; ?>"><img src="../images/logo.png" alt="<?php echo SITETITLE;?>" border="0"></a></div>

<!--  Navigation -->
<div id="navigation">
	<ul class="menu">
	<li><a href="<?php echo PATHADMIN; ?>">Admin</a></li>
	<li><a href="<?php echo PATH;?>" target="_blank">View Website</a></li>
	<li><a href="<?php echo PATHADMIN.'product.php'?>">Products</a></li>
	<li><a href="<?php echo PATHADMIN.'checkout.php'?>">Checkout</a></li>
	<li><a href="<?php echo PATHADMIN.'index.php?action=logout'?>">Logout</a></li>
	</ul>
</div>
<!-- End of Navigation -->

<div id="content">
<h1>Manage Products</h1>
<h3>Add a new product:</h3>
<!-- 
<table>
<tr>
<th><strong>Product Title</strong></th>
<th><strong>Product Summary</strong></th>
<th><strong>Product Description</strong></th>
<th><strong>Product Image</strong></th>
</tr>
</table>-->
<form method="post" action="admin.php?action=addp">
Add a new product:<br />
<label>Product Title: <input type="text" name="pname" /></label><br /> 
<label>Product summary: <input type="text" name="psummary" /></label><br />
<label>Product description: <input type="text" name="pdescription" /></label><br />
<label>Product photo(link): <input type="text" name="pphoto" /></label><br />
<?php
foreach ($list_categories as $ckey => $cvalue)
	echo "Product categories: <input type='checkbox' name='categories[]' value='$ckey'>$cvalue<br />";
?>
<input type="submit" name="submit" value="submit" />
</form>
<form method="post" action="admin.php?action=addc"> 
Add a new category:<br />
Category title: <input type="text" name="cname" /><br /> 
Category summary: <input type="text" name="csummary" /><br />
Category description: <input type="text" name="cdescription" /><br />
<input type="submit" name="submit" value="submit" />
</form>

<form method="post" action="admin.php?action=editp"> 
Edit a product:<br />
<select name="pid">
<?php
foreach ($list_products as $pkey => $pvalue)
	echo "<option value='$pkey'>$pvalue</option>"
?>
</select><br />
Product title: <input type="text" name="pname" /><br /> 
Product summary: <input type="text" name="psummary" /><br />
Product description: <input type="text" name="pdescription" /><br />
Product photo: <input type="text" name="pphoto" /><br />
Delete product: (beware, this will delete it!) <input type="checkbox" name="pdel" value="1" /> 
<input type="submit" name="submit" value="submit" />
</form>

<form method="post" action="admin.php?action=editc"> 
Edit a category:<br />
<select name="cid">
<?php
	foreach ($list_categories as $ckey => $cvalue)
		echo "<option value='$ckey'>$cvalue</option>"
?>
</select><br />
Category title: <input type="text" name="cname" /><br /> 
Category summary: <input type="text" name="csummary" /><br />
Category description: <input type="text" name="cdescription" /><br />
Delete category: (beware, this will delete it!) <input type="checkbox" name="cdel" value="1" /> 
<input type="submit" name="submit" value="submit" />
</form>

<form action="admin.php?action=editu" method="post">
Edit/Create a user: <br />
<select name="uid">
<option value="new">New User</option>
<?php
		foreach ($list_users as $ukey => $uvalue)
			echo "<option value='$ukey'>$uvalue</option>"
?>
</select>
<br />
Username: <input type="text" name="uname"/><br />
Full Name: <input type="text" name="name" /><br />
Email: <input type="text" name="email" /><br />
Password:(only for new users): <input type="password" name="pass" /><br />
Admin rights: <input type='checkbox' name='admin' value='1'><br />
Delete user: (beware, this will delete it!) <input type="checkbox" name="udel" value="1" /> 
<input type="submit" name="submit" value="submit" />
</form>
</div>
<?php include('../includes/footer.php')?>
</div> <!--  Close of wrapper -->
</body>
</html>