<!-- <div id="sidebar">
<ul id="menu">

<?php
//require('../includes/config.php');
if (isset($_SESSION['uname'])) {

	if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1)
		echo "<li><a href='index.php'>Admin panel</a></li>";
?>
<li><a href="edit.php">Change account settings</a></li>
<li><a href="../admin/login.php?action=logout">Log out</a></li>
<?php
}
else {
	//include_once("../admin/login.php");
}
?>
</ul>
</div>
-->