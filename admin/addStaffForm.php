
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../images/favicon.ico">
<title>Staff : Administration Dashboard</title>

<!-- Bootstrap core CSS -->
<link href="../css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="dashboard.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	 <?php
include_once '../inc/topnav.inc.php';
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
	<?php
	$pageid=2;
	include_once '../inc/sidenav.inc.php';
			
				?></div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="page-header">Add new staff</h1>
                    <form method="post" action="processAddStaff.php">
                        <div class="form-group">
                            <label for="txtFirstName">First Name</label>
                            <input type="text" class="form-control" id="txtFirstName" name="txtFirstName">
                        </div>
                        <div class="form-group">
                            <label for="txtLastName">Last Name</label>
                            <input type="text" class="form-control" id="txtLastName" name="txtLastName">
                        </div>
                        <div class="form-group">
                            <label for="DOB">Date of Birth</label>
                            <input type="date" class="form-control" id="DOB" name="DOB">
                        </div>
                        <div class="form-group">
                            <label for="txtPayRate">Pay rate</label>
                            <input type="number" class="form-control" id="txtPayRate" name="txtPayRate">
                        </div>
                        <div class="form-group">
                            <label for="txtAddress">Address</label>
                            <input type="text" class="form-control" id="txtAddress" name="txtAddress">
                        </div>
                        <div class="form-group">
                            <label for="txtPhone">Phone</label>
                            <input type="text" class="form-control" id="txtPhone" name="txtPhone">
                        </div>
                        <div class="form-group">
                            <label for="txtPhoto">Photo</label>
                            <input type="text" class="form-control" id="txtPhoto" name="txtPhoto">
                        </div>
                        <input type="submit" class="btn btn-success" value="Add Staff">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="dist/js/vendor/jquery.min.js"><\/script>')</script> 
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
