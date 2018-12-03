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
				<?php

		//this page will delete the employee 
		//selected from the previous page
				
				//read employeeID passed to this page
				$employeeID = $_GET[ 'EMPLOYEEID' ];

				//connect to server and database 
				require_once '../inc/connect.inc.php';
				
		// but we should only do this if employee is not rostered on
				
				//set up query to find all rosters for the employee
				$query = "SELECT rosterID FROM tblroster WHERE employeeID='$employeeID'";
				//execute query
				$result = mysqli_query( $link, $query );

				//check if query is unsuccessful
				if ( !$result ) {
					?>
					<div class="alert alert-info" role="alert">
					<?php
					exit( "Query error1: " . mysqli_error( $link ));
					?>
					</div>
					<?php
					mysqli_close( $link );
				}

				$rowCount = mysqli_num_rows( $result );
		
		// if there are roster dates for this employee
				if ($rowCount>0) {
					?>
					<div class="alert alert-danger" role="alert">
						<?php
						exit( "This employee is allocated to rosters and cannot be deleted." );
						?>
					</div>
					<?php
						mysqli_close( $link );
				}

		// It is OK to delete employee

				//set up query
				$query = "DELETE FROM tblEmployee 
				WHERE employeeID = $employeeID"; // really important where clause

				//execute query
				$result = mysqli_query( $link, $query );


				//check if query is unsuccessful
				if ( !$result ) {
					?>
				<div class="alert alert-info" role="alert">
					<?php
					exit( "Query error: " . mysqli_error( $link ) );
					?>
				</div>
				<?php
				mysqli_close( $link );
				}
				
				mysqli_close( $link );
				?>
				<div class="alert alert-success" role="alert">
					<?php
					echo( "Successfully deleted record with ID $employeeID" );
					?>
				</div>

			</div> <!-- .main -->
		</div> <!-- .row -->
	</div> <!-- .container-fluid -->

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="dist/js/vendor/jquery.min.js"><\/script>')</script> 
<script src="../js/bootstrap.min.js"></script>
</body>
</html>

