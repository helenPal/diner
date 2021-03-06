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

    <title>Staff : Administration Dashboard  </title>

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
          <h1 class="page-header">Staff</h1>
			
			 <a  class="btn btn-primary" href="addStaffForm.php">Add new staff</a>
			 
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Staff ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>DOB</th>
                  <th>Pay rate</th>
                  <th>address</th>
                  <th>Phone</th>
                  <th>Photo</th>            
                  <th></th>
                  <th></th>             
                </tr>
              </thead>
              <tbody>
<?php
					//connect to server and database 
					require_once '../inc/connect.inc.php';
					//set up SQL statement
					$query = 'select * from tblEmployee';

					//execute the SQL
					$result = mysqli_query( $link, $query );

					//check if query is unsuccessful
					if( !$result ) {
						?>
					<div class="alert alert-info" role="alert">
						<?php
						exit( "Query error: " . mysqli_error( $link ) );
						?>
					</div>
					<?php
					mysqli_close( $link );

					}

					//get the number of rows in the result set and store in a variable
					$rowCount = mysqli_num_rows( $result );

					if ( $rowCount == 0 ) {
						mysqli_close( $link );
						?>
					<div class="alert alert-info" role="alert">
						<?php

						exit( "No employees found that satisfies criteria" );
						?>
					</div>
					<?php
					}

					//fetch next row of the result set until there are no more left
					while ( $record = mysqli_fetch_array( $result, MYSQLI_ASSOC ) ) {
						$empID=$record['employeeID'];
						$firstName = $record[ 'employeeFirstName' ];
						$lastName = $record[ 'employeeLastName' ];
						$dob = $record[ 'employeeDOB' ];
						$payrate = $record[ 'employeePayrate' ];
						$address = $record[ 'employeeAddress' ];
						$phone = $record[ 'employeePhone' ];
						$photo = $record[ 'employeePhoto' ];


						//display the values to the browser in a table row
						?>
               
               
                <tr>
                  <td><?=$empID; ?></td>
                  <td><?= $firstName; ?></td>
                  <td><?= $lastName; ?></td>
                   <td><?=$dob; ?></td>
                  <td><?= $payrate; ?></td>
                  <td><?= $address; ?></td>
                  <td><?=$phone; ?></td>
                  <td><?= $photo; ?></td>               
				  <td><a href="editStaffForm.php?EMPLOYEEID=<?= $empID; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a></td>
					<td><a href="javascript:fnConfirm('processDeleteStaff.php?EMPLOYEEID=<?= $empID; ?>')"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Delete</a></td>
                </tr>
                <?php
					}
					mysqli_free_result( $result );
					//mysqli_close($link);

					?>				
                              </tbody>
            </table>
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
     <script src="../js/confirmDelete.js">	 </script>
    
  </body>
</html>
