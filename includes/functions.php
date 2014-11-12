<?php 
if(!defined('included'))
{
	die('You cannot access this file directly.');
}

function userRegistration($name,$email,$username,$pass)
{
	$name = strip_tags(mysql_real_escape_string($name));
	$email = strip_tags(mysql_real_escape_string($email));
	$username = strip_tags(mysql_real_escape_string($username));
	$pass = strip_tags(mysql_real_escape_string($pass));
	$pass = hash('sha512',$pass);

	$sql = "INSERT INTO  users(name,email,uname,pass) VALUES('$name','$email','$username','$pass')";
	$result = mysql_query($sql) or die('Query failed '.mysql_error());
}

function userLogin($username, $pass)
{
	$username = strip_tags(mysql_real_escape_string($username));
	$pass = strip_tags(mysql_real_escape_string($pass));
	$pass = hash('sha512',$pass);
	
	$sql = "SELECT * FROM users WHERE uname='$username' AND pass='$pass'";
	$result = mysql_query($sql);
	
	if(mysql_num_rows($result) == 1)
	{
		$_SESSION['authorized'] = true;
		header('Location: '.PATHADMIN);
		exit();
	}
}

function loggedIn()
{
	if($_SESSION['authorized'] == true)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function loginRequired()
{
	if(loggedIn())
	{
		return true;
	}
	else
	{
		header('Location: '.PATHADMIN.'login.php');
		exit();
	}
}
	
function userLogout()
{
	unset($_SESSION['authorized']);
	header('Location: '.PATHADMIN.'login.php');
	exit();
}	

function messages()
{
	$message = '';
	if($_SESSION['success'] != '')
	{
		$message = '<div class="msg-ok">'.$_SESSION['success'].'</div>';
		$_SESSION['success'] = '';
	}
	
	if($_SESSION['error'] != '')
	{
		$message = '<div class="msg-error">'.$_SESSION['error'].'</div>';
		$_SESSION['error'] = '';
	}
	echo $message;
}

function errors($error)
{
	if(!empty($error))
	{
		$i = 0;
		while($i < count($error))
		{
			$showError.="<div class=\"msg-error\">".$error[$i]."</div>";
			$i ++;
			echo $showError;
		}
	}
}

function addProduct($title,$summary,$description,$photo)
{
	$title = mysql_real_escape_string($title);
	$summary = mysql_real_escape_string($summary);
	$description = mysql_real_escape_string($description);
	$photo = mysql_real_escape_string($photo);
	
	$query = "INSERT INTO products(title,summary,description,photo) VALUES('$title','$summary','$description','$photo')";
	mysql_query($query) or die(mysql_error());
}

function addCategory($title,$summary,$description)
{
	$title = mysql_real_escape_string($title);
	$summary = mysql_real_escape_string($summary);
	$description = mysql_real_escape_string($description);
	
	$query = "INSERT INTO categories(title,summary,description) VALUES('$title','$summary','$description') ";
	mysql_query($query) or die(mysql_error());
}
?>