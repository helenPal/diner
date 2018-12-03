
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
                    <h1 class="page-header">Edit staff</h1>
					
		<?php			
    	//read employeeID passed to this page
    	$employeeID = $_GET['EMPLOYEEID'];

   	 	//connect to server and database
   	 	require_once '../inc/connect.inc.php';

   	 	//set up query
   	 	$query = "select * from tblEmployee where employeeID = $employeeID";

   	 	//execute query
    	$result = mysqli_query($link,$query);

    	if(!$result)
    {
		echo "Query error: ". mysqli_error($link);
		mysqli_close($link);
		exit();
    }

    	//fetch the result set, ie the selected SINGLE RECORD, so no while loop
  		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		//store the results in variables
		$firstName = $row['employeeFirstName'];
		$lastName = $row['employeeLastName'];
		$DOB = $row['employeeDOB'];
		$payRate = $row['employeePayrate'];
		$address = $row['employeeAddress'];
		$phone = $row['employeePhone'];
		$photo = $row['employeePhoto'];

		mysqli_close($link);
		//display employee details to form elements
	  ?>                    
                    
                    <form method="post" action="processEditStaff.php">
                       		<input type="hidden" name="txtEmployeeID" id="txtEmployeeID" value="<?= $employeeID; ?>">

                        <div class="form-group">
                            <label for="txtFirstName">First Name</label>
                            <input type="text" class="form-control" id="txtFirstName" name="txtFirstName" value="<?= $firstName; ?>">
                        </div>
                        <div class="form-group">
                            <label for="txtLastName">Last Name</label>
                            <input type="text" class="form-control" id="txtLastName" name="txtLastName" value="<?= $lastName; ?>">
                        </div>
                        <div class="form-group">
                            <label for="DOB">Date of Birth</label>
                            <input type="date" class="form-control" id="DOB" name="DOB" value="<?= $DOB; ?>">
                        </div>
                        <div class="form-group">
                            <label for="txtPayRate">Pay rate</label>
                            <input type="number" class="form-control" id="txtPayRate" name="txtPayRate" value="<?= $payRate; ?>">
                        </div>
                        <div class="form-group">
                            <label for="txtAddress">Address</label>
                            <input type="text" class="form-control" id="txtAddress" name="txtAddress" value="<?= $address; ?>">
                        </div>
                        <div class="form-group">
                            <label for="txtPhone">Phone</label>
                            <input type="text" class="form-control" id="txtPhone" name="txtPhone" value="<?= $phone; ?>">
                        </div>
                        <div class="form-group">
                            <label for="txtPhoto">Photo</label>
                            <input type="text" class="form-control" id="txtPhoto" name="txtPhoto" value="<?= $photo; ?>">
                        </div>
                        <input type="submit" class="btn btn-success" value="Edit Staff">
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
