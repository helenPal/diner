
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
<title>Positions : Administration Dashboard</title>

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
	$pageid=3;
	include_once '../inc/sidenav.inc.php';
			
				?></div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="page-header">Add new position</h1>
                    <form method="post" action="processAddPosition.php">
                        <div class="form-group">
                            <label for="txtPosCode">Position Code</label>
                            <input type="text"  maxlength="4" class="form-control" id="txtPosCode" name="txtPosCode">
                        </div>
                        <div class="form-group">
                            <label for="txtPosDesc">Position description</label>
                            <input type="text" class="form-control" id="txtPosDesc" name="txtPosDesc">
                        </div>

                        <input type="submit" class="btn btn-success" value="Add Position">
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
<script src="../js/confirmDelete.js">    </script>
</body>
</html>
