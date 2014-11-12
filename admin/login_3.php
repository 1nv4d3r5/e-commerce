<?php 
require('../includes/config.php');

if(loggedIn())
{
	header('Location: '.PATHADMIN);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo SITETITLE;?></title>
<?php include('../includes/header.php')?>
</head>
<body>
 <div class="container">
<?php 
		if($_POST['submit'])
		 {
			userLogin($_POST['username'], $_POST['password']);
			echo 'SUCCESS';
		}
		?>
      <form class="form-signin" role="form" method="post" action="">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Sign in</button>
      </form>

    </div>

    </body>
</html>
