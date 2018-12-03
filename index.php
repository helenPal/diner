<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="images/favicon.ico">

	<title>Hornsby Diner</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">



	<!-- Custom styles for this template -->
	<link href="style.css" rel="stylesheet">



	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<div class="site-wrapper">

		<div class="site-wrapper-inner">

			<div class="cover-container">

				<div class="masthead clearfix">
					<div class="inner">
						<h3 class="masthead-brand">Hornsby Diner</h3>
						<nav>
							<ul class="nav masthead-nav">
								<li class="active"><a href="#">Home</a>
								</li>
								<li><a href="#">Menu</a>
								</li>
								<li><a href="#">Contact</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>

				<div class="inner cover">
					<h1 class="cover-heading">Hornsby Diner</h1>
					<p class="lead"> Our Diner is a place for the regulars and newcomers alike.</p>
					<p class="lead">
						It’s not home, it’s not work; it’s your ‘third place,’ where you’re taken care of.<br> We welcome you to visit and make our food a part of your tradition.</p>
					<p class="lead">
						<a href="#" class="btn btn-lg btn-default">Book a table Now</a>
					</p>
					<div class="team">
						<h2 class="sub-header">Our Team</h2>

						<div class="row staff">
							
<?php

						require('inc/connect.inc.php');

//set up SQL statement
    $query = 'select employeeFirstName, employeeLastName, employeePhoto from tblEmployee';

    //execute the SQL
    $result = mysqli_query($link,$query);

    //check if query is unsuccessful
    if(!$result)
    {
		echo "Query error: ". mysqli_error($link);
		mysqli_close($link);
		exit();
    }
	
	//get the number of rows in the result set and store in a variable
	$rowCount = mysqli_num_rows($result);

	if($rowCount == 0)
	{
		mysqli_close($link);
		exit ("No employees found that satisfies criteria");
	}
	
	while($record = mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
    	$firstName =  $record['employeeFirstName'];
		$lastName =  $record['employeeLastName'];
		
		$photo = $record['employeePhoto'];
		
	//display the values to the browser 
							?>
							
							<div class="col-xs-6 col-sm-3 "> <img src="images/<?= $photo; ?>" width="200" height="200" class="img-responsive" alt="<?= $firstName; ?> <?= $lastName; ?>">
								<h4>
									<?= $firstName; ?>		<?= $lastName; ?>											</h4>

							</div>
<?php
	}
	mysqli_free_result($result);
    mysqli_close($link);
  ?>
							
							
						</div>

					</div>
				</div>

				<div class="mastfoot">
					<div class="inner">
						<p><a href="admin/index.php">Admin</a>
						</p>
					</div>
				</div>

			</div>

		</div>

	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
		window.jQuery || document.write( '<script src="../../assets/js/vendor/jquery.min.js"><\/script>' )
	</script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>