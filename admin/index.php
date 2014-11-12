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
<?php //include_once('../includes/sidebar.php'); ?>
<link rel="stylesheet" href="<?php echo PATH;?>/lib/css/dashboard.css" type="text/css" />
<style type="text/css">
.table-sortable tbody tr {
    cursor: move;
}
</style>
<title>Admin Panel | <?php echo SITETITLE; ?></title>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo PATHADMIN; ?>"><?php echo SITETITLE;?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="<?php echo PATHADMIN; ?>">Admin</a></li>
			<li><a href="<?php echo PATH;?>" target="_blank">View Website</a></li>
			<li><a href="<?php echo PATHADMIN.'product.php'?>">Products</a></li>
			<li><a href="<?php echo PATHADMIN.'checkout.php'?>">Checkout</a></li>
			<li><a href="<?php echo PATHADMIN.'index.php?action=logout'?>">Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Checkout</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>


          </div>

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<div class="container">
	<div class="row">
        <div class="col-sm-12">
            <legend>Mr. Sosa:</legend>
        </div>
        <!-- panel preview -->
        <div class="col-sm-5">
            <h4>Add payment:</h4>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Concept</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="concept" name="concept">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">Amount</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="amount" name="amount">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="status" name="status">
                                <option>Paid</option>
                                <option>Unpaid</option>
                            </select>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                    </div>   
                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                            <button type="button" class="btn btn-default preview-add-button">
                                <span class="glyphicon glyphicon-plus"></span> Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>            
        </div> <!-- / panel preview -->
        
	</div>
</div>
          
        </div>
      </div>
    </div>
    <?php include('../includes/footer.php')?>
</body>
</html>